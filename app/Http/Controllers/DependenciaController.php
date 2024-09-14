<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dependencia; 

class DependenciaController extends Controller
{
      // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $dependencias=Dependencia::create([
           "nomdependencia"=>$request->nomdependencia,
           "piso"=>$request->piso,
           
           ]);   





        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito dependencia',
            'data' =>   $dependencias
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
     
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito dependencia',
           
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!dependencia!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito dependencia'
        ]);
    }
}