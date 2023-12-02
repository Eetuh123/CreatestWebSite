<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySession extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'notes', 'standardized_rest', 'week_id'];

    public function weeklyRoutine() {
        return $this->belongsToMany(weeklyRoutine::class, 'daily_session_weekly_routine', 'daily_session_id', 'weekly_routine_id');
    }

    public function exercises() {
        return $this->belongsToMany(Exercise::class, 'exercise_daily_session');
    }
}
