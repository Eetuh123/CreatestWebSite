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
        Schema::create('daily_exercises', function (Blueprint $table) {
            $table->id();
            $table->string('days')->nullable(); 
            $table->string('name');
            $table->text('notes')->nullable();
            $table->time('standardized_rest')->nullable();
            $table->json('exercise_ids')->nullable();
            $table->timestamps();
            $table->foreignId('week_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_exercises');
    }
};
