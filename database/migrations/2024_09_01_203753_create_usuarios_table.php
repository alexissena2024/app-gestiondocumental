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
        //lo que esta despues de la palabra create en este caso usuarios debe ser igual a como esta en las MIGRACIONES****/*
        Schema::create('usuarios', function (Blueprint $table) {
            
            $table->bigIncrements('id'); // Clave primaria
            $table->string('nombre'); 
            $table->string('apellido_materno');
            $table->string('apellido_paterno'); 
            $table->string('cedula')->unique(); // Cédula única
           
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
