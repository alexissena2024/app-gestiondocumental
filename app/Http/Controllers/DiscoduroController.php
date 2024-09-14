<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Discoduro; 

class DiscoduroController extends Controller
{
    // Método para guardar en seguridad
  public function save(Request $request)
  {


     //PRIMERA FORMA DE HACER LA PETICION**********
      $discos=Discoduro::create([
         "capacidaddisco"=>$request->capacidaddisco,
      
         
         ]);   





      return response()->json([
          'status' => '200',
          'message' => 'guardado con éxito disco duro',
          'data' =>  $discos
      ]);
 }
  

     



  // Método para obtener datos
  public function getData(Request $request)
  {
   
      return response()->json([
          'status' => '200',
          'message' => 'datos obtenidos con éxito disco',
         
      ]);
  }





  // Método para actualizar   PUT*****
  public function actualizar(Request $request)
  {
      return response()->json([
          'status' => '200',
          'message' => 'actualizado con éxito!!!disco!!'
      ]);
  }
      



  // Método para eliminar un usuario
  public function delete(Request $request)
  {
      return response()->json([
          'status' => '200',
          'message' => 'eliminado con éxito disco'
      ]);
  }
}