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
        Schema::create('dependencias', function (Blueprint $table) {
            $table->id('id_dependencia');//llave primaria
            $table->string('nomdependencia');
            $table->string('piso');

            // Definir la columna para la llave foránea
            $table->unsignedBigInteger('fk_sedes');
            
            // Establecer la relación de la llave foránea
            $table->foreign('fk_sedes')->references('id_sedes')->on('sedes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependencias');
    }
};
