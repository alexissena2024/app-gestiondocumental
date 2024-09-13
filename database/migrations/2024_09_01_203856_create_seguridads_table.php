<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seguridads', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria
         
            $table->string('contraseña'); // Contraseña
            $table->boolean('restablecer_contraseña'); // Campo booleano
            $table->string('politicas expiracion'); //
            $table->integer('bloqueo de intentos'); //

            $table->unsignedBigInteger('cedulaFK');
            $table->foreign('cedulaFK')->references('id')->on('usuarios');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguridads');
    }
};
