<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class GymProgram extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'total_length', 'starting_day', 'ending_day', ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trainingBlocks() {
        return $this->hasMany(TrainingBlock::class);
    }

}
