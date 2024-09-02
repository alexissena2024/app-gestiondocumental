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
        Schema::create('accions', function (Blueprint $table) {
            $table->id('id_accion'); // Llave primaria
            $table->boolean('guardar'); // Campo booleano 
            $table->boolean('actualizar'); // Campo booleano 
            $table->boolean('modificar'); // Campo booleano 
            $table->boolean('eliminar'); // Campo booleano 
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accions');
    }
};
