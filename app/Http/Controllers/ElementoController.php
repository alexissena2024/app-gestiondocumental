<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Elemento; //IMPORTO EL MODELO*********

class ElementoController extends Controller
{
    // Método para guardar 
    public function save(Request $request)
    {
       
       //PRIMERA FORMA DE HACER LA PETICION**********
       $tipoelementos=Elemento::create([
            "tipoelemento"=>$request->tipoelemento,
            "serie"=>$request->serie,
            "placa"=>$request->placa,
            "mac"=>$request->mac,
            "nombrepc"=>$request->nombrepc,
           "fk_marca"=>$request->fk_marca,
           "fk_modelo"=>$request->fk_modelo,
           "fk_memoria"=>$request->fk_memoria,
           "fk_disco"=>$request->fk_disco,
           "fk_ofimatica"=>$request->fk_ofimatica,
           "fk_antivirus"=>$request->fk_antivirus, 
           
           ]);   

       
       return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito TABLA ELEMENTOS****',
            'data' => $tipoelementos
        ]);
    }
    


    // Método para obtener datos
    public function getData(Request $request)
    {
        $tipoelementos=Elemento::all(); //TRAE TODOS LOS DATOS DE LA BASE DE DATOS******
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito TABLA TIPO ELEMENTOS',
           'data' =>  $tipoelementos
        ]);
    }





    // Método para actualizar 
    public function actualizar(Request $request)
    {
       
        $tipoelementos=Elemento::findOrFail($request->id);

        $tipoelementos->update([
            "tipoelemento"=>$request->tipoelemento,
            "serie"=>$request->serie,
            "placa"=>$request->placa,
            "mac"=>$request->mac,
            "nombrepc"=>$request->nombrepc,
           "fk_marca"=>$request->fk_marca,
           "fk_modelo"=>$request->fk_modelo,
           "fk_memoria"=>$request->fk_memoria,
           "fk_disco"=>$request->fk_disco,
           "fk_ofimatica"=>$request->fk_ofimatica,
           "fk_antivirus"=>$request->fk_antivirus, 

       ]);

       
       return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!TABLA ELEMENTOS*****!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {

        $tipoelementos=Elemento::find($request->id);
      

       if($$tipoelementos){
        $tipoelementos->delete();
           return response()->json([
               'status' => '200',
               'message' => 'eliminado con éxito TABLA ELEMENTOS'
           ]);
       }else{
           return response()->json([
               'status' => '200',
               'message' => 'el ID no existe en la  TABLA ELEMENTOS'
           ]);

       }

        
    }
}
