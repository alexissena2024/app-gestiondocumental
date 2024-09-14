<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colegio; //IMPORTO EL MODELO*********

class ColegioController extends Controller
{
     // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $usuario=Colegio::create([
           "nombre_colegio"=>$request->nombrecolegio,
          
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
            'message' => 'guardado con éxito colegio',
            'data' => $request->nombre,
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
        $rta = 10 + 2;
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito colegio',
            'result' => $rta
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!colegio!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito colegio'
        ]);
    }
}