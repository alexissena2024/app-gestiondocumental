<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seguridad; //IMPORTO EL MODELO*********

class SeguridadController extends Controller
{
     // Método para guardar 
     public function save(Request $request)
     {
        
        //PRIMERA FORMA DE HACER LA PETICION**********
        $seguridad=Seguridad::create([
            "contraseña"=>$request->contraseña,
            "restablecer_contraseña"=>$request->resseguridad,
            "politicas expiracion"=>$request->poliexpiracion,
            "bloqueo de intentos"=>$request->bloqintentos,
            "cedulaFK"=>$request->cedula
            ]);   

        
        
        
        
        
        return response()->json([
             'status' => '200',
             'message' => 'guardado con éxito TABLA SEGURIDAD',
            //  'data' => $request->$cedula,
         ]);
     }
     


     // Método para obtener datos
     public function getData(Request $request)
     {
         $seguridad=Seguridad::all(); //TRAE TODOS LOS DATOS DE LA BASE DE DATOS******
         return response()->json([
             'status' => '200',
             'message' => 'datos obtenidos con éxito TABLA SEGURIDAD',
            'data' => $seguridad
         ]);
     }




 
     // Método para actualizar 
     public function actualizar(Request $request)
     {
        
        $seguridad=Seguridad::findOrFail($request->id);

        $seguridad->update([
            'contraseña'=>$request->contraseña,

        ]);

        
        return response()->json([
             'status' => '200',
             'message' => 'actualizado con éxito!!!TABLA SEGURIDAD!!'
         ]);
     }
         



     // Método para eliminar un usuario
     public function delete(Request $request)
     {

        $seguridad=Seguridad::find($request->id);
       

        if($seguridad){
            $seguridad->delete();
            return response()->json([
                'status' => '200',
                'message' => 'eliminado con éxito TABLA SEGURIDAD'
            ]);
        }else{
            return response()->json([
                'status' => '200',
                'message' => 'el ID no existe en la  TABLA SEGURIDAD'
            ]);

        }

         
     }
}
