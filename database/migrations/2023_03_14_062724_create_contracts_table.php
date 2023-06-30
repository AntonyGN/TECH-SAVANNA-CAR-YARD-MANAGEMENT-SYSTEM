<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('contractnumber');
            $table->string('contracttype');
            $table->string('date');
            $table->string('duration');
            $table->string('contractterms');
            $table->string('termination');
            $table->string('salesagreementdocument');
            $table->string('purchaseagreementdocument');
            $table->timestamps();
            
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};
