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
        Schema::create('vehicles', function (Blueprint $table) {
        /** $table->string('make');
            $table->string('model');
        **/
            $table->id('vehicle_id');
            $table->string('vehicle_type');
            $table->string('vehicle_brand');
            $table->string('plate_number');
            $table->timestamps();
          $table->id('rental_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
