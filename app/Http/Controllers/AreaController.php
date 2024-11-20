<?php

namespace App\Http\Controllers;

use App\Models\Area; // IMPORTAR EL MODELO CORRECTAMENTE
use Illuminate\Http\Request;

class AreaController extends Controller
{
    // Método para guardar en AREAS
    public function save(Request $request)
    {
        $request->validate([
            'nombre' => 'required', 
            'salario' => 'required', 
            'area' => null, 
        ]);

        // Crear el nuevo registro en la base de datos
        $area = Area::create([
            'nombre' => $request->nombre,
            'salario' => $request->salario,
            'area' => $request->area,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Guardado con éxito en AREAS',
            'data' => $area
        ]);
    }

    // Método para obtener todos los datos
    public function getData()
    {
        $area = Area::all();

        return response()->json([
            'status' => 200,
            'message' => 'Datos obtenidos con éxito de AREAS',
            'data' => $area
        ]);
    }

    // Método para actualizar un área
    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required', // Asegurarse de que 'nombre' sea texto
            'salario' => 'required', // Asegurarse de que 'salario' sea un número, puede ser nulo
            'area' => 'required', // Asegurarse de que 'area' sea texto, puede ser nulo
        ]);

        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'status' => 404,
                'message' => 'Área no encontrada'
            ], 404);
        }

        // Solo actualizamos los campos si están presentes en el request
        $area->update([
            'nombre' => $request->nombre ?? $area->nombre,
            'salario' => $request->salario ?? $area->salario,
            'area' => $request->area ?? $area->area,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Actualizado con éxito el Área',
            'data' => $area
        ]);
    }

    // Método para eliminar un área
    public function delete($id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'status' => 404,
                'message' => 'Área no encontrada'
            ], 404);
        }

        $area->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Eliminado con éxito el Área'
        ]);
    }
}
