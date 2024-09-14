<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ofimatica; //IMPORTO EL MODELO*********


class OfimaticaController extends Controller
{
    // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $ofimatica=Ofimatica::create([
           "nomofimatica"=>$request->nomofimatica,
           
           ]);   




        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito ofimatica',
            'data' =>  $ofimatica
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
     
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito ofimatica',
           
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!ofimatica!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito ofimatica'
        ]);
    }
}
