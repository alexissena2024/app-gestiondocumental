<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salasistema; //IMPORTO EL MODELO*********


class SalasistemaController extends Controller
{
    // Método para guardar en seguridad
   public function save(Request $request)
   {


    // Validar la solicitud
    $request->validate([
        'nom_salasistema' => 'required|string|max:255',
    ]);





      //PRIMERA FORMA DE HACER LA PETICION**********
      $sala = Salasistema::create([
        "nom_salasistema" => $request->nom_salasistema,
    ]);



        //SEGUNDA FORMA DE HACER LA PETICION*******
      
      // $usuario=new Usuario();
      // $usuario->nombre=$request ->name;
      // $usuario->apellido_materno=$request ->apellido_materno;
      // $usuario->apellido_paterno=$request ->apellido_paterno;
      // $usuario->cedula=$request ->cedula;
      // $usuario->save();

   
      return response()->json([
        'status' => '200',
        'message' => 'Guardado con éxito en la tabla sala sistema',
        'data' => $sala // Devuelve el registro creado
    ]);
  }
   

      



   // Método para obtener datos
   public function getData(Request $request)
   {
       $rta = 10 + 2;
       return response()->json([
           'status' => '200',
           'message' => 'datos obtenidos con éxito sala sistema',
           'result' => $rta
       ]);
   }





   // Método para actualizar   PUT*****
   public function actualizar(Request $request)
   {
       return response()->json([
           'status' => '200',
           'message' => 'actualizado con éxito!!!sala sistema!!'
       ]);
   }
       



   // Método para eliminar un usuario
   public function delete(Request $request)
   {
       return response()->json([
           'status' => '200',
           'message' => 'eliminado con éxito sala sistema'
       ]);
   }
}