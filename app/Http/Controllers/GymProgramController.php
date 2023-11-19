<?php
 
namespace App\Http\Controllers;
 
use Inertia\Inertia;
use Inertia\Response;
use App\Models\GymProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
 
class GymProgramController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('GymProgram/Index', [

        ]);
    }

    public function store(Request $request): Response
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique', 
            'length' => 'required|integer|max:52',
        ]);
        $gymProgram = new GymProgram();
        $gymProgram->user_id = Auth::id();
        $gymProgram->name = $validated['name'];
        $gymProgram->length = $validated['length'];

        //changes requested
        return Inertia::render('GymProgram/SomeView', [
            'gymProgram' => $gymProgram
        ]);
    }
}