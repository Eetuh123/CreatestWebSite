<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySession extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'notes', 'standardized_rest', 'week_id'];

    public function weeklyRoutines() {
        return $this->belongsToMany(WeeklyRoutine::class, 'daily_session_weekly_routine');
    }

    public function exercises() {
        return $this->belongsToMany(Exercise::class, 'exercise_daily_session');
    }
}
