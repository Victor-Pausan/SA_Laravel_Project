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
        Schema::dropIfExists('location_schedules');
        Schema::create('location_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gym_location_id')->nullable();
            $table->foreign('gym_location_id')->references('id')->on('gym_locations')->nullOnDelete();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->foreign('schedule_id')->references('id')->on('schedules')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_schedules');
    }
};
