<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Illuminate\Http\Request;

class TrainingBlockController extends Controller
{
    /**
     * Show the profile for a given user.
     */

    public function store(Request $request): Response
    {
        return redirect()->route('gymprogram.index')->with([]);
    }
}
