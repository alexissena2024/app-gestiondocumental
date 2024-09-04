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
        Schema::create('infcolegios', function (Blueprint $table) {
            $table->id('id_infcolegios'); // Campo id_infcolegios como Primary Key con auto-incremento
            $table->unsignedBigInteger('id_informes'); // Campo id_informes como Foreign Key
            $table->unsignedBigInteger('id_colegios'); // Campo id_colegios como Foreign Key
            
             // Definición de llaves foráneas
             $table->foreign('id_informes')->references('id_informes')->on('informes')->onDelete('cascade');
             $table->foreign('id_colegios')->references('id_colegio')->on('colegios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infcolegios');
    }
};
