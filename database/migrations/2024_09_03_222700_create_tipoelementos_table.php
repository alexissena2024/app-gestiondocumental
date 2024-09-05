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
        Schema::create('tipoelementos', function (Blueprint $table) {
            $table->id('id_tipo_elemento');

            // Crear el campo para la llave foránea
            $table->unsignedBigInteger('id_marca'); 
            $table->foreign('id_marca')->references('id_marca')->on('marcas');

            $table->unsignedBigInteger('fk_modelos'); 
            $table->foreign('fk_modelos')->references('id_modelo')->on('modelos');

            $table->unsignedBigInteger('fk_memorias'); 
            $table->foreign('fk_memorias')->references('id_memoria')->on('memorias');
            

            $table->unsignedBigInteger('fk_discoduro'); 
            $table->foreign('fk_discoduro')->references('id_disco')->on('discoduros');

            $table->unsignedBigInteger('fk_ofimatica'); 
            $table->foreign('fk_ofimatica')->references('id_ofimatica')->on('ofimaticas');

            $table->unsignedBigInteger('fk_antivirus'); 
            $table->foreign('fk_antivirus')->references('id_antivirus')->on('antivirus');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipoelementos');
    }
};
