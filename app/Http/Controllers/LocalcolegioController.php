<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocalcolegioController extends Controller
{
     // Método para guardar en seguridad
     public function save(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'guardado con éxito LOCALIDAD COLEGIO',
             'data' => $request->nombre,
         ]);
     }
     
     // Método para obtener datos
     public function getData(Request $request)
     {
         $rta = 10 + 2;
         return response()->json([
             'status' => '200',
             'message' => 'datos obtenidos con éxito LOCALIDAD COLEGIO',
             'result' => $rta
         ]);
     }
 
     // Método para actualizar 
     public function actualizar(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'actualizado con éxito!!!LOCALIDAD COLEGIO!!'
         ]);
     }
         
     // Método para eliminar un usuario
     public function delete(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'eliminado con éxito TABLA LOCALIDAD COLEGIO'
         ]);
     }
}
