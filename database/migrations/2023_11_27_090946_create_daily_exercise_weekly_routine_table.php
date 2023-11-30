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
        Schema::create('daily_exercise_weekly_routine', function (Blueprint $table) {
            $table->id();
            $table->foreignId('daily_exercise_id')->constrained()->onDelete('cascade');
            $table->foreignId('weekly_routine_id')->constrained()->onDelete('cascade');
            $table->json('days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_exercise_weekly_routine');
    }
};
