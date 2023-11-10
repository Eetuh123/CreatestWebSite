<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_custom_exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id');
            $table->foreignId('user_id');
            $table->json('body_parts')->nullable();
            $table->integer('reps')->nullable();
            $table->integer('sets')->nullable();
            $table->integer('rest')->nullable();
            $table->integer('intensity')->nullable();
            $table->integer('weight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_custom_exercises');
    }
};
