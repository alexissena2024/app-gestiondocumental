<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Sede; //IMPORTO EL MODELO*********

class SedeController extends Controller
{
    // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $sedes=Sede::create([
           "nomsedes"=>$request->nomsedes,
           
           ]);   





        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito sede',
            'data' =>  $sedes
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
     
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito sede',
           
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!sede!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito sede'
        ]);
    }
}
