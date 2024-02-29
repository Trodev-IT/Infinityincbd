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
        Schema::create('event_registers', function (Blueprint $table) {
            $table->id();
            $table->integer('slno');
            $table->integer('event_id');
            $table->string('player_name');
            $table->string('player_email')->unique();
            $table->integer('player_phone')->unique();
            $table->string('payment');
            $table->string('transaction');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_registers');
    }
};
