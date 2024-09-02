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
            $table->id('idsistemas');
            
            // Definir la columna para la llave foránea
                $table->unsignedBigInteger('colegios_fk');

            // Establecer la relación de la llave foránea
                 $table->foreign('colegios_fk')->references('id_colegio')->on('colegios')->onDelete('cascade');



             // Definir la columna para la llave foránea que referencia a 'salasistemas'
                $table->unsignedBigInteger('salasistemas_fk'); 
                $table->foreign('salasistemas_fk')->references('id_salasistemas')->on('salasistemas')->onDelete('cascade');

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
