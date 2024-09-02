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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id('id_sedes');//llave primaria
            $table->string('nomsedes');

            // Definir la columna para la llave foránea
            $table->unsignedBigInteger('FK_colegio');
            
            // Establecer la relación de la llave foránea
            $table->foreign('FK_colegio')->references('id_colegio')->on('colegios')->onDelete('cascade');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
