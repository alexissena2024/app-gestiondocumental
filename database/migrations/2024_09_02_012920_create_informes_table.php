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
        Schema::create('informes', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria
            $table->string('nombre_informe'); 
            $table->date('fecha_inicial'); 
            $table->date('fecha_final'); 
            $table->boolean('convertir_pdf_a_excel'); //campo boolenao
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes');
    }
};
