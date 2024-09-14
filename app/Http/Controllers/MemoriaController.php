<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Memoria; //IMPORTO EL MODELO*********



class MemoriaController extends Controller
{
     
// Método para guardar en seguridad
public function save(Request $request)
{


   //PRIMERA FORMA DE HACER LA PETICION**********
    $memorias=Memoria::create([
       "capacidadmemoria"=>$request->capacidadmemoria,
       
       ]);   




    return response()->json([
        'status' => '200',
        'message' => 'guardado con éxito memoria',
        'data' =>   $memorias
    ]);
}


   



// Método para obtener datos
public function getData(Request $request)
{
 
    return response()->json([
        'status' => '200',
        'message' => 'datos obtenidos con éxito memoria',
       
    ]);
}





// Método para actualizar   PUT*****
public function actualizar(Request $request)
{
    return response()->json([
        'status' => '200',
        'message' => 'actualizado con éxito!!!memoria!!'
    ]);
}
    



// Método para eliminar un usuario
public function delete(Request $request)
{
    return response()->json([
        'status' => '200',
        'message' => 'eliminado con éxito memoria'
    ]);
}

}
