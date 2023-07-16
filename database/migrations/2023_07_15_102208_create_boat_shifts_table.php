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
        Schema::create('boat_shifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boat_id')->constrained();
            $table->foreignId('shift_id')->constrained();
            $table->foreignId('dock_id')->constrained();
            $table->date('date_of_shift');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boat_shifts');
    }
};
