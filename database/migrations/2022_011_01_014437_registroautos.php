<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registroautos extends Migration{
    
    public function up(){
        Schema::create('registroautos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('registroautos');
    }
}