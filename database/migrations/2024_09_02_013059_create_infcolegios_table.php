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
            $table->id('id_infcolegios');//llave principal

           // Llave foránea que referencia a la tabla 'informes'
              $table->unsignedBigInteger('informes_fk');
             $table->foreign('informes_fk')->references('id_informes')->on('informes')->onDelete('cascade');


             // Llave foránea que referencia a la tabla 'colegios'
                $table->unsignedBigInteger('colegios_fk');
                $table->foreign('colegios_fk')->references('id_colegio')->on('colegios')->onDelete('cascade');

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
