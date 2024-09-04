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
            $table->id('id_localcolegio');
             // Definición de columnas para llaves foráneas
             $table->unsignedBigInteger('fk_idcolegios');
             $table->foreign('fk_idcolegios')->references('id_colegio')->on('colegios');
           

             $table->unsignedBigInteger('fk_localidad');
             $table->foreign('fk_localidad')->references('id_localidad')->on('localidads');

             $table->unsignedBigInteger('fk_nomsedes');
             $table->foreign('fk_nomsedes')->references('tipo_sede')->on('sedes');


             $table->unsignedBigInteger('fk_dependencias');
             $table->foreign('fk_dependencias')->references('id_tipo_dependencia')->on('dependencias');



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
