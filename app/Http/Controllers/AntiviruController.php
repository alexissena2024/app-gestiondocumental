<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Antiviru; //IMPORTO EL MODELO*********

class AntiviruController extends Controller
{
    // Método para guardar en seguridad
   public function save(Request $request)
   {


      //PRIMERA FORMA DE HACER LA PETICION**********
       $antiviru=Antiviru::create([
          "nomantivirus"=>$request->nomantivirus,
          ]);   


       return response()->json([
           'status' => '200',
           'message' => 'guardado con éxito  antivirus',
           'data' => $antiviru
       ]);
  }
   

      



   // Método para obtener datos
   public function getData(Request $request)
   {
     
       return response()->json([
           'status' => '200',
           'message' => 'datos obtenidos con éxito antivirus',
       
       ]);
   }





   // Método para actualizar   PUT*****
   public function actualizar(Request $request)
   {
       return response()->json([
           'status' => '200',
           'message' => 'actualizado con éxito!!!Antivirus!!'
       ]);
   }
       



   // Método para eliminar un usuario
   public function delete(Request $request)
   {
       return response()->json([
           'status' => '200',
           'message' => 'eliminado con éxito antivirus'
       ]);
   }
}