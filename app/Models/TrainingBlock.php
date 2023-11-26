<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TrainingBlock extends Model
{
    use HasFactory;

    protected $fillable = ['gym_program_id', 'name', 'block_length'];

    protected $casts = [
        'routine_schedule' => 'array',
    ];

    public function trainingBlocks() {
        return $this->belongsTo(GymProgram::class);
    }

    public function weeklyRoutines() {
        return $this->hasMany(WeeklyRoutine::class);
    }
}
