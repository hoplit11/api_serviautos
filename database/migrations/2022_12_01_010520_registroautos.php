<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registroautos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroautos', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 50); // Se crea un nuevo campo contraseña en  la tabla 
            $table->string('modelo', 50); // Se crea un nuevo campo contraseña2 en  la tabla
            $table->float('valor', 50); // Se crea un nuevo campo contraseña2 en  la tabla
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
        Schema::dropIfExists('registroautos');
    }
}
