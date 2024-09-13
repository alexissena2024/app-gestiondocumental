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
            $table->bigIncrements('id'); // Clave primaria
             // Definición de columnas para llaves foráneas
             $table->unsignedBigInteger('fk_idcolegios');
             $table->foreign('fk_idcolegios')->references('id')->on('colegios');
           

             $table->unsignedBigInteger('localidad_FK');
             $table->foreign('localidad_FK')->references('id')->on('localidads');
            
             $table->unsignedBigInteger('fk_nomsedes');
             $table->foreign('fk_nomsedes')->references('id')->on('sedes');


             $table->unsignedBigInteger('fk_dependencias');
             $table->foreign('fk_dependencias')->references('id')->on('dependencias');


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
