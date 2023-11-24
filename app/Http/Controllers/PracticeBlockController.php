<?php
 
namespace App\Http\Controllers;
 
use Inertia\Inertia;
use Inertia\Response;
use App\Models\GymProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
 
class GymProgramController extends Controller
{
    /**
     * Show the profile for a given user.
     */

    public function store(Request $request): Response
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255', 
            'length' => 'required|integer|max:52',
        ]);
        
        $gymProgram = new GymProgram();
        $gymProgram->user_id = Auth::id();
        $gymProgram->name = $validated['name'];
        $gymProgram->length = $validated['length'];
        $gymProgram->save();

        return redirect()->route('gymprogram.index')->with([
            'gymProgram' => $gymProgram
        ]);
    }
}