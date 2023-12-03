<?php
namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ExerciseController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('GymProgram/CreateExerciseModal', []);
    }

    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'sets'  => 'integer|between:0,100',
            'reps'  => 'integer|between:0,100',
            'weight' => 'integer|between:0,1000',
            'rest'  => 'integer',
            'notes' => 'string|max:255',
        ]);

        $exercise = Exercise::create([
            'name'  => $validated['name'],
            'user_id' => Auth::id(),
            'sets'  => $validated['sets'],
            'reps'  => $validated['reps'],
            'weight' => $validated['weight'],
            'rest'  => $validated['rest'],
            'notes' => $validated['notes'],
        ]);

        return redirect()->route('gymprogram.index')->with([
            'gymProgram' => $exercise,
        ]);
    }
    
}
