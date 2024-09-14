<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accion; //IMPORTO EL MODELO*********

class AccionController extends Controller
{
     // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $usuario=Accion::create([
           "guardar"=>$request->guardar,
           "actualizar"=>$request->actualizar,
           "modificar"=>$request->modificar,
           "eliminar"=>$request->eliminar
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
            'message' => 'guardado con éxito  accion',
            'data' => $request->nombre,
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
        $rta = 10 + 2;
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito accion',
            'result' => $rta
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!accion!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito accion'
        ]);
    }
}