<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\DailySession;
use Illuminate\Http\Request;
use App\Models\WeeklyRoutine;
use Illuminate\Http\RedirectResponse;

class DailySessionController extends Controller
{
    public function index(Request $request): Response
    {
        return Inertia::render('GymProgram/Index', []);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'dailySession_name' => 'required|string|max:255',
            'day' => 'required', // You may want to validate the day as well
            'weekly_routine_id' => 'required|integer|exists:weekly_routines,id',
        ]);
    
        $dailySession = DailySession::create([
            'name' => $validated['dailySession_name'],
            'notes' => '',
            'standardized_rest' => 0,
        ]);
    
        // Attach the daily session to the weekly routine
        $weeklyRoutine = WeeklyRoutine::findOrFail($validated['weekly_routine_id']);
        $weeklyRoutine->dailySessions()->attach($dailySession->id, ['days' => json_encode([$validated['day']])]);
    
        // Redirect or return a response
        return redirect()->route('gymprogram.index');
    }
}
