<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dependencia; 
use Illuminate\Support\Facades\Validator;

class DependenciaController extends Controller
{
     // Método para guardar 
     public function save(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'guardado con éxito TABLA DEPENDENCIA',
             'data' => $request->nombre,
         ]);
     }


     
     // Método para obtener datos
     public function getData(Request $request)
     {
         $rta = 10 + 2;
         return response()->json([
             'status' => '200',
             'message' => 'datos obtenidos con éxito TABLA DEPENDENCIA',
             'result' => $rta
         ]);
     }
 
     // Método para actualizar 
     public function actualizar(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'actualizado con éxito!!!TABLA DEPENDENCIA!!'
         ]);
     }
         
     // Método para eliminar un usuario
     public function delete(Request $request)
     {
         return response()->json([
             'status' => '200',
             'message' => 'eliminado con éxito TABLA DEPENDENCIA'
         ]);
     }
}