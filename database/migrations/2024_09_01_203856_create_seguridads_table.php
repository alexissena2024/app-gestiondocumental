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
        Schema::create('seguridad', function (Blueprint $table) {
            $table->id('seguridad_id'); // Llave primaria
            $table->string('cedulaFK'); // Llave foránea
            $table->string('contraseña'); // Contraseña
            $table->boolean('restablecer_contraseña'); // Campo booleano
            $table->foreign('cedulaFK')->references('cedula')->on('usuarios')->onDelete('cascade');
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
