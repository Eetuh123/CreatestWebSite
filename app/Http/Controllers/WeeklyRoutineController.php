<?php
 
namespace App\Http\Controllers;
 
use Inertia\Inertia;
use Inertia\Response;
use App\Models\GymProgram;
use App\Models\TrainingBlock;
use App\Models\WeeklyRoutine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
 
class WeeklyRoutineController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('GymProgram/Index', [

        ]);
    }

    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'training_block_id' => 'required|integer', 
            'week_name' => 'required|string|max:255', 
            'occurrence_weeks' => 'required|integer|max:52',
        ]);
        
      $weeklyRoutine = WeeklyRoutine::create([
            'training_block_id' => $validated['training_block_id'],
            'name' => $validated['week_name'],
            'occurrence_weeks' => $validated['occurrence_weeks'],
        ]);

        return redirect()->route('gymprogram.index')->with([
            'gymProgram' => $weeklyRoutine,
        ]);
    }
}