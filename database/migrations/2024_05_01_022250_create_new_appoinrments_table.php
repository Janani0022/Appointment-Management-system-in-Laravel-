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
        Schema::create('new_appoinrments', function (Blueprint $table) {
            $table->id();
            $table->String('NIC');
            $table->String('Name');
            $table->String('PhoneNumber');
            $table->String('VehicleType');
            $table->String('VehicleNumber')->nullable();
            $table->String('VehicleModel');
            $table->String('Services');
            $table->String('Date');
            $table->String('Time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_appoinrments');
    }
};
