<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\infcolegio; //IMPORTO EL MODELO*********

class infcolegioController extends Controller
{
     // Método para guardar 
     public function save(Request $request)
     {
        
        //PRIMERA FORMA DE HACER LA PETICION**********
        $inforcolegio=infcolegio::create([
            "informes_fk"=>$request->informe,
            "colegios_fk"=>$request->colegio,
            
            ]);   

        
        return response()->json([
             'status' => '200',
             'message' => 'guardado con éxito TABLA informe colegio',
            //  'data' => $request->$inforcolegio
         ]);
     }
     


     // Método para obtener datos
     public function getData(Request $request)
     {
        $inforcolegio=infcolegio::all(); //TRAE TODOS LOS DATOS DE LA BASE DE DATOS******
         return response()->json([
             'status' => '200',
             'message' => 'datos obtenidos con éxito TABLA informe colegio',
            'data' => $inforcolegio
         ]);
     }




 
     // Método para actualizar 
     public function actualizar(Request $request)
     {
        
        $inforcolegio=infcolegio::findOrFail($request->id);

        $inforcolegio->update([
            'contraseña'=>$request->contraseña,

        ]);

        
        return response()->json([
             'status' => '200',
             'message' => 'actualizado con éxito!!!TABLA informe colegio!!'
         ]);
     }
         



     // Método para eliminar un usuario
     public function delete(Request $request)
     {

        $inforcolegio=infcolegio::find($request->id);
       

        if($inforcolegio){
            $inforcolegio->delete();
            return response()->json([
                'status' => '200',
                'message' => 'eliminado con éxito TABLA informe colegio'
            ]);
        }else{
            return response()->json([
                'status' => '200',
                'message' => 'el ID no existe en la  TABLA informe colegio'
            ]);

        }

         
     }
}
