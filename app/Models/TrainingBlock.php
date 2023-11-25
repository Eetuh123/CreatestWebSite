<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TrainingBlock extends Model
{
    use HasFactory;

    protected $fillable = ['gym_program_id', 'name', 'block_length'];

    public function trainingBlocks() {
        return $this->hasMany(TrainingBlock::class);
    }
}
