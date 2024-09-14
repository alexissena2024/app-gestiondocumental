<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Modelo; //IMPORTO EL MODELO*********

class ModeloController extends Controller
{
    // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $modelos=Modelo::create([
           "nommodelo"=>$request->nommodelo,
           
           ]);   




        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito modelos',
            'data' =>  $modelos
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
     
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito modelos',
           
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!modelos!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito modelos'
        ]);
    }
}
