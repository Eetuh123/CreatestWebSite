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
        Schema::create('training_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('gym_program_id')->constrained()->onDelete('cascade');
            $table->json('routine_schedule')->nullable();
            $table->integer('number_of_weeks');
            $table->date('starting_day');
            $table->date('ending_day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_blocks');
    }
};
