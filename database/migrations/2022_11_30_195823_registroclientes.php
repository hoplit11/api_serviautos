<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registroclientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('registroclientes', function (Blueprint $table) {
            $table->id(); //Campo auto-numerico
            $table->string('correo', 50); // Se crea un nuevo campo nombre en  la tabla 
            $table->string('contraseña', 50); // Se crea un nuevo campo contraseña en  la tabla 
            $table->string('contraseña2', 50); // Se crea un nuevo campo contraseña2 en  la tabla
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
        Schema::dropIfExists('registroclientes');
    }
}

