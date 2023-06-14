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
            $table->string('logbook')->default('');
            $table->string('registrationdocument')->default('');
            $table->string('roadworthiness')->default('');
            $table->binary('document')->nullable();

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
        Schema::dropIfExists('cardocuments');
    }
};
