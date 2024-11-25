<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo; // Importa correctamente el modelo Cargo

class CargoController extends Controller
{
    // Método para guardar un nuevo cargo
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

    // Método para obtener todos los cargos
    public function getData()
    {
        $cargos = Cargo::all();

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de Cargos',
            'data' => $cargos
        ]);
    }

    // Método para obtener un cargo por su ID
     
    public function getDataById(Request $request)
    {
        // $cargo = Cargo::findOrFail($id);
        $cargo = Cargo::where('id',$request->id)->get();//traiga los que correspondan por el ID metodo GET con una clausa WHERE
    
        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de Cargos',
            'data' => $cargo
        ]);
    }
    // Método para actualizar un cargo
     public function actualizar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'salario' => 'required',
            'area' => 'required',
            
        ]);

        $cargo = Cargo::findOrFail($request->id);
      //aqui se actualizan losa datos del car
        $cargo->update([
             'nombre' => $request->nombre,
            'salario' => $request->salario,
            'area' => $request->area,
       ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con éxito Cargos!',
         'data' => $cargo
       ]);
     }

   
      
    // Método para eliminar un cargo por su ID
    public function delete(Request $request)
 
    {
        $cargo = Cargo::findOrFail($request->id);
         $cargo->delete();


        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con éxito Cargo'
        ]);
    }
}