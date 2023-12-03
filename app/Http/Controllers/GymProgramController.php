<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\GymProgram;
use App\Models\TrainingBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class GymProgramController extends Controller
{
    public function index(Request $request): Response
    {
        $id = Auth::id();
        $gymPrograms = GymProgram::where('user_id', $id)->get();
        return Inertia::render('GymProgram/Index', [
            'gymPrograms' => $gymPrograms,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'program_name' => 'required|string|max:255',
            'total_length' => 'required|integer|max:52',
            'block_name' => 'required|string|max:255',
            'block_length' => [
                'required',
                'integer',
                'max:52',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value > $request->input('total_length')) {
                        $fail('The block length cannot be greater than the total length.');
                    }
                },
            ],
        ]);

        $gymProgram = GymProgram::create([
            'user_id' => Auth::id(),
            'name' => $validated['program_name'],
            'total_length' => $validated['total_length'],
        ]);

        $numberOfBlocks = ceil($validated['total_length'] / $validated['block_length']);

        for ($i = 0; $i < $numberOfBlocks; $i++) {
            TrainingBlock::create([
                'gym_program_id' => $gymProgram->id,
                'name' => $validated['program_name'] . ' Block ' . ($i + 1),
                'block_length' => $validated['block_length'],
            ]);
        }

        return redirect()->route('gymprogram.index')->with([
            'gymProgram' => $gymProgram,
        ]);
    }

    public function show($id)
    {
        $gymProgram = GymProgram::with('trainingBlocks')->findOrFail($id);
        return Inertia::render('GymProgram/ProgramPage', [
            'gymProgram' => $gymProgram,
        ]);
    }
}
