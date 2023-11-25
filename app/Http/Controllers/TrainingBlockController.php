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


        return redirect()->route('gymprogram.index')->with([
        ]);
    }
}