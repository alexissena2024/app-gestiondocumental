<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Método para guardar un usuario
    public function save(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'guardado con éxito',
            'data'=> $request->nombre,
        ]);
    }
    
    // Método para obtener datos
    public function getData(Request $request)
    {
        $rta = 10 + 2;
        return response()->json([
            'status' => '200',
            'message' => 'datos obtenidos con éxito usuarios',
            'result' => $rta
        ]);
    }

    // Método para actualizar un usuario
    public function actualizar(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'actualizado con éxito!!!!!'
        ]);
    }
        
    // Método para eliminar un usuario
    public function delete(Request $request)
    {
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con éxito'
        ]);
    }
}
