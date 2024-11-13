<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo; // Importa correctamente el modelo Cargo

class CargoController extends Controller
{
    // Método para guardar en seguridad
    public function save(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'salario' => 'required',
            'area' => 'required',
        ]);

        $cargo = Cargo::create([
            'nombre' => $request->nombre,
            'salario' => $request->salario,
            'area' => $request->area,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito en Cargos',
            'data' => $cargo
        ]);
    }

    // Método para obtener datos
    public function getData()
    {
        $cargos = Cargo::all();

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de Cargos',
            'data' => $cargos
        ]);
    }

    // Método para actualizar
    public function actualizar(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $cargo = Cargo::find($id);

        if (!$cargo) {
            return response()->json([
                'status' => '404',
                'message' => 'Cargo no encontrado'
            ], 404);
        }

        $cargo->update([
            'nombre' => $request->nombre,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con éxito Cargos!',
            'data' => $cargo
        ]);
    }

    // Método para eliminar un cargo
    public function delete($id)
    {
        $cargo = Cargo::find($id);

        if (!$cargo) {
            return response()->json([
                'status' => '404',
                'message' => 'Cargo no encontrado'
            ], 404);
        }

        $cargo->delete();

        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con éxito Cargo'
        ]);
    }
}
