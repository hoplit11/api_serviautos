<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registroclientes extends Migration{
    
    public function up(){
        Schema::create('registroclientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('registroclientes');
    }
}