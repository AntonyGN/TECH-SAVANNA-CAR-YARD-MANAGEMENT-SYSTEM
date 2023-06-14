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
        Schema::table('cardocuments', function (Blueprint $table) {
            $table->string('name');
            $table->string('mime_type');
            $table->integer('size');
            $table->string('file_path');
            $table->timestamps();
        });
        
            //

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cardocuments', function (Blueprint $table) {
            //
        });
    }
};
