<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Localidad; //IMPORTO EL MODELO*********

class LocalidadController extends Controller
{
    // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $localidad=Localidad::create([
           "nombre_localidad"=>$request->nombre_localidad,
           
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
            'message' => 'guardado con éxito localidad',
            'data' =>  $localidad
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
     
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito localidad',
           
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!localidad!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito localidad'
        ]);
    }
}
