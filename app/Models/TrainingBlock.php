<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrainingBlock extends Model
{
    use HasFactory;

    protected $fillable = ['starting_day', 'ending_day', 'gym_program_id', 'name', 'number_of_weeks', 'routine_schedule'];

    protected $casts = [
        'routine_schedule' => 'array',
    ];

    public function trainingBlocks() {
        return $this->belongsTo(GymProgram::class);
    }

    public function weeklyRoutines() {
        return $this->hasMany(WeeklyRoutine::class);
    }

    public function getCurrentWeek($trainingBlockId)
    {
        $trainingBlock = TrainingBlock::findOrFail($trainingBlockId);
        $startDate = Carbon::parse($trainingBlock->starting_day);
        $currentDate = Carbon::now();
    
        $weekNumber = $startDate->diffInWeeks($currentDate) + 1; // +1 because we want to start counting from 1

        return $weekNumber;
    }
}
