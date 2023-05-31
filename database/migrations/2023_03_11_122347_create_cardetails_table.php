<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardetails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('make');
            $table->string('model');
            $table->string('fueltype');
            $table->string('yearofmanufacture');
            $table->string('transmission');
            $table->string('chassisno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardetails');
    }
};