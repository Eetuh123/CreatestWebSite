<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WeeklyRoutine extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_block_id', 
        'name',
        'occurrence_weeks',
    ];

    public function trainingBlocks() {
        return $this->belongsTo(TrainingBlock::class);
    }

    public function dailySessions() {
        return $this->hasMany(DailySession::class);
    }
}
