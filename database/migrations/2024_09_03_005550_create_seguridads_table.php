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
        Schema::create('seguridads', function (Blueprint $table) {
            $table->bigIncrements('id'); // Clave primaria
           
            $table->string('contraseña');
            $table->boolean('restablecer_contraseña');
            

            // Definir la clave foránea
            $table->unsignedBigInteger('fkcedula');
           
            $table->foreign('fkcedula')
               ->references('id') // Columna en la tabla `usuarios` a la que se hace referenci
               ->on('usuarios'); // Tabla en la que se encuentra la columna de referencia
                $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
  public function down(): void
    {
        Schema::table('seguridads', function (Blueprint $table) {
            $table->dropForeign(['cedulaFK']); // Eliminar la clave foránea antes de eliminar la tabla
        });

        Schema::dropIfExists('seguridads');
    }
};