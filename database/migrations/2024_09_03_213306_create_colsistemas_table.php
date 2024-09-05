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
        Schema::create('colsistemas', function (Blueprint $table) {
            $table->id('id_colsistemas'); // Campo id_colsistemas como Primary Key con auto-incremento
            $table->unsignedBigInteger('id_colegios'); // Campo id_colegios como Foreign Key
            $table->unsignedBigInteger('id_sala_de_sistemas'); // Campo id_sala_de_sistemas como Foreign Key
            
            // Definición de llaves foráneas
            $table->foreign('id_colegios')->references('id_colegio')->on('colegios')->onDelete('cascade');
            $table->foreign('id_sala_de_sistemas')->references('id_sistema')->on('sistemas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colsistemas');
    }
};
