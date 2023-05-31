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
        Schema::create('vehiclesales', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->string('chassisno');
            $table->string('yearofmanufacture');
            $table->string('salesprice');
            $table->string('dateofsale');
            $table->string('buyername');
            $table->string('buyersddress');
            $table->string('paymentmethod');
            // $table->string('Comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiclesales');
    }
};