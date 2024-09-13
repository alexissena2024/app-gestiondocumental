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
        Schema::create('elementos', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria
            $table->string('tipoelemento'); 
            $table->string('serie');
            $table->string('placa');
            $table->string('mac');
            $table->string('nombrepc');


             // Definir la columna para la llave foránea
             $table->unsignedBigInteger('fk_marca');
             $table->foreign('fk_marca')->references('id')->on('marcas')->onDelete('cascade');

            // Definir la columna para la llave foránea id_modelo
            $table->unsignedBigInteger('fk_modelo');
            $table->foreign('fk_modelo')->references('id')->on('modelos')->onDelete('cascade');

            // Definir la columna para la llave foránea fk_memoria
            $table->unsignedBigInteger('fk_memoria');
            $table->foreign('fk_memoria')->references('id')->on('memorias')->onDelete('cascade');

            // Definir la columna para la llave foránea id_disco
            $table->unsignedBigInteger('fk_disco');
            $table->foreign('fk_disco')->references('id')->on('discos')->onDelete('cascade');

            // Definir la columna para la llave foránea fk_ofimatica
            $table->unsignedBigInteger('fk_ofimatica');
            $table->foreign('fk_ofimatica')->references('id')->on('ofimaticas')->onDelete('cascade');

             // Definir la columna para la llave foránea fk_antivirus
             $table->unsignedBigInteger('fk_antivirus');
             $table->foreign('fk_antivirus')->references('id')->on('antivirus')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elementos');
    }
};
