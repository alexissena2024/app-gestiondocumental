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
        Schema::create('localcolegios', function (Blueprint $table) {
            $table->id('id_localcolegios');//llave principal
            $table->string('nomcolegios');

            // Definir la columna para la llave foránea LOCALIDADES
            $table->unsignedBigInteger('fk_localidades');
            
            // Establecer la relación de la llave foránea 
            $table->foreign('fk_localidades')->references('id_localidad')->on('localidades')->onDelete('cascade');
            

              // Definir la columna para la llave foránea COLEGIOS
              $table->unsignedBigInteger('fk_colegios');
            
              // Establecer la relación de la llave foránea
              $table->foreign('fk_colegios')->references('id_colegio')->on('colegios')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localcolegios');
    }
};
