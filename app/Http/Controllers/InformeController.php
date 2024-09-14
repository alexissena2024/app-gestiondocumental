<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\informe; //IMPORTO EL MODELO*********

class InformeController extends Controller
{
    // Método para guardar en seguridad
    public function save(Request $request)
    {


       //PRIMERA FORMA DE HACER LA PETICION**********
        $usuario=informe::create([
           "nombre_informe"=>$request->nombreinforme,
           "fecha_inicial"=>$request->fechaini,
           "fecha_final"=>$request->fechafini,
           "convertir_pdf_a_excel"=>$request->converpdftoexcel
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
            'message' => 'guardado con éxito informe',
            'data' => $request->nombre,
        ]);
   }
    

       



    // Método para obtener datos
    public function getData(Request $request)
    {
        $rta = 10 + 2;
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito informe',
            'result' => $rta
        ]);
    }





    // Método para actualizar   PUT*****
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!informe!!'
        ]);
    }
        



    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito informe'
        ]);
    }
}
