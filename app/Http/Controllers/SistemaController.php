<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    // Método para guardar 
    public function save(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito en tabla SISTEMA',
            'data' => $request->nombre,
        ]);
    }
    
    // Método para obtener datos
    public function getData(Request $request)
    {
        $rta = 10 + 2;
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito en tabla SISTEMA',
            'result' => $rta
        ]);
    }

    // Método para actualizar 
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!tabla SISTEMA!!'
        ]);
    }
        
    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito tabla SISTEMA'
        ]);
    }
}
