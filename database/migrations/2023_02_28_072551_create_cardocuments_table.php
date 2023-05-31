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
        Schema::create('cardocuments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->string('logbook');
             $table->string('registrationdocument');
             $table->string('roadworthiness');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardocuments');
    }
};
