<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca; //IMPORTO EL MODELO*********


class MarcaController extends Controller
{
     // Método para guardar en seguridad
     public function save(Request $request)
     {
 
 
        //PRIMERA FORMA DE HACER LA PETICION**********
         $marcas=Marca::create([
            "nommarca"=>$request->nommarca,
            
            ]);   
 
 

 
         return response()->json([
             'status' => '200',
             'message' => 'guardado con éxito marcas',
             'data' =>  $marcas
         ]);
    }
     
 
        
 
 
 
     // Método para obtener datos
     public function getData(Request $request)
     {
      
         return response()->json([
             'status' => '200',
             'message' => 'datos obtenidos con éxito marcas',
            
         ]);
     }
 
 
 
 
 
     // Método para actualizar   PUT*****
     public function actualizar(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'actualizado con éxito!!!marcas!!'
         ]);
     }
         
 
 
 
     // Método para eliminar un usuario
     public function delete(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'eliminado con éxito marcas'
         ]);
     }
}
