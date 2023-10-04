<?php
 
namespace App\Http\Controllers;
 
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
 
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
}