<?php
 
namespace App\Http\Controllers;
 
use Inertia\Inertia;
use Inertia\Response;
use App\Models\GymProgram;
use App\Models\TrainingBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
 
class TrainingBlockController extends Controller
{
    /**
     * Show the profile for a given user.
     */

    public function store(Request $request): Response
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255', 
            'block_length' => 'required|integer|max:52',
            'gym_program_id' => 'required|exists:gym_programs,id',
        ]);
        
    $numberOfBlocks = ceil($validated['total_length'] / $validated['block_length']);

    for ($i = 0; $i < $numberOfBlocks; $i++) {    
        $trainingBlock = new TrainingBlock();
        $trainingBlock->gym_program_id = $validated['gym_program_id'];
        $trainingBlock->name = $validated['name'] . ' Block ' . ($i + 1);
        $trainingBlock->length = $validated['length'];
        $trainingBlock->save();
    }

        return redirect()->route('gymprogram.index')->with([
            'trainingBlock' => $trainingBlock
        ]);
    }
}