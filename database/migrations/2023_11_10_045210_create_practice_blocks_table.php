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
        Schema::create('practice_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('gym_program_id');
            $table->integer('length');
            $table->integer('increments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practice_blocks');
    }
};
