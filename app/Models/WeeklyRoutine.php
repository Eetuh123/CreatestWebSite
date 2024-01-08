<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WeeklyRoutine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'occurrence_weeks', 'training_block_id'];

    public function trainingBlocks() {
        return $this->belongsTo(TrainingBlock::class);
    }

    public function dailySessions() {
        return $this->belongsToMany(DailySession::class, 'daily_session_weekly_routine');
    }
}
