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
        Schema::create('visitor_tables', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->integer('visit_count');
            $table->string('countryName');
            $table->string('countryCode');
            $table->string('regionName');
            $table->string('regionCode');
            $table->string('cityName');
            $table->string('zipCode');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('areaCode');
            $table->string('timezone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_tables');
    }
};
