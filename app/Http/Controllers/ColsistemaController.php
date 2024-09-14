<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Colsistema; //IMPORTO EL MODELO*********

class ColsistemaController extends Controller
{
     // Método para guardar 
     public function save(Request $request)
     {
        
        //PRIMERA FORMA DE HACER LA PETICION**********
     
            $colsistema = Colsistema::create([
            "colegios_fk" => $request->colegios_fk,  // Asegurarse de que el nombre sea correcto
            "salasistemas_fk" => $request->salasistemas_fk,  // Usar el nombre adecuado
            
            ]);   

        
        return response()->json([
             'status' => '200',
             'message' => 'guardado con éxito TABLA colsistema',
              'data' => $colsistema
         ]);
     }
     


     
}