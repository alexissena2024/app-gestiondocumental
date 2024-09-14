<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Localcolegio; //IMPORTO EL MODELO*********



class LocalcolegioController extends Controller
{
    // Método para guardar 
    public function save(Request $request)
    {
       
       //PRIMERA FORMA DE HACER LA PETICION**********
       $localidad=Localcolegio::create([
           "fk_idcolegios"=>$request->fk_idcolegios,
           "localidad_FK"=>$request->localidad_FK,
           "fk_nomsedes"=>$request->fk_nomsedes,
           "fk_dependencias"=>$request->fk_dependencias,
           
           ]);   

       
       return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito TABLA LOCALIDAD COLEGIOS****',
            'data' => $localidad
        ]);
    }
    


    // Método para obtener datos
    public function getData(Request $request)
    {
        $localidad=Localcolegio::all(); //TRAE TODOS LOS DATOS DE LA BASE DE DATOS******
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito TABLA LOCALIDAD COLEGIOS',
           'data' => $localidad
        ]);
    }





    // Método para actualizar 
    public function actualizar(Request $request)
    {
       
        $localidad=Localcolegio::findOrFail($request->id);

        $localidad->update([
           'fk_idcolegios'=>$request->fk_idcolegios,
           'localidad_FK'=>$request->fk_idcolegios,
           'fk_nomsedes'=>$request->fk_idcolegios,
           'fk_dependencias'=>$request->fk_idcolegios,

       ]);

       
       return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!TABLA LOCALIDAD COLEGIOS!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {

        $localidad=Localcolegio::find($request->id);
      

       if($localidad){
        $localidad->delete();
           return response()->json([
               'status' => '200',
               'message' => 'eliminado con éxito TABLA LOCALIDAD COLEGIOS'
           ]);
       }else{
           return response()->json([
               'status' => '200',
               'message' => 'el ID no existe en la  TABLA LOCALIDAD COLEGIO'
           ]);

       }

        
    }
}
