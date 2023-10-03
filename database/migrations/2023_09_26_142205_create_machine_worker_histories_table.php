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
        Schema::create('machine_worker_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machine_id')->constrained();
            $table->foreignId('worker_id')->constrained();
            $table->timestamp('work_started_at');
            $table->timestamp('work_ended_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machine_worker_histories');
    }
};
