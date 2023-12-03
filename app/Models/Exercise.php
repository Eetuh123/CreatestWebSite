<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sets',
        'reps',
        'weight',
        'rest',
        'notes',
        'user_id',
    ];

    public function dailySession() {
        return $this->belongsToMany(DailySession::class, 'exercise_daily_session');
    }
}
