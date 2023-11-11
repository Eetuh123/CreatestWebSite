<?php
 
namespace App\Http\Controllers;
 
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\GymProgramRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\GymProgram;
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
    public function store(GymProgramRequest $request): RedirectResponse
    {
        $validate = $request->validate();
        $gymProgram = GymProgram::create($validate);

    }
}