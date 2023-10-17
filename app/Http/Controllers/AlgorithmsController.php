<?php
 
namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
 
class AlgorithmsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Algorithms/Index', [

        ]);
    }
}