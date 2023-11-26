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
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday',
        'sunday',
    ];

    protected $casts = [
        'monday' => 'boolean',
        'tuesday' => 'boolean',
        'wednesday' => 'boolean',
        'thursday' => 'boolean',
        'friday' => 'boolean',
        'saturday' => 'boolean',
        'sunday' => 'boolean',
    ];

    public function trainingBlocks() {
        return $this->belongsTo(TrainingBlock::class);
    }
}
