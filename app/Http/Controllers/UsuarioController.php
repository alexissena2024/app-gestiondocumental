<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Importa correctamente el modelo usuario

class UsuarioController extends Controller
{
    // Método para guardar un nuevo cargo
    public function save(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidoMat' => 'required',
            'apellidoPat' => 'required',
            'cedula' => 'required',
        ]);

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'apellido_materno' => $request->apellidoMat,
            'apellido_paterno' => $request->apellidoPat,
            'cedula' => $request->cedula,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito en usuarios',
            'data' => $usuario
        ]);
    }

    // Método para obtener todos los usuarios
    public function getData()
    {
        $usuarios = Usuario::all();

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de Usuarios',
            'data' => $usuarios
        ]);
    }

    // Método para obtener un usuario por su ID
     
    public function getDataById(Request $request)
    {
        // $cargo = Cargo::findOrFail($id);
        $usuario = Usuario::where('id',$request->id)->get();//traiga los que correspondan por el ID metodo GET con una clausa WHERE
    
        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de Usuario',
            'data' => $usuario
        ]);
    }


     
 
    // Método para actualizar un usuario
     public function actualizar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ApellidoMat' => 'required',
            'ApellidoPat' => 'required',
            'cedula' => 'required',
            'id' => 'required',
            
        ]);

        $usuario = Usuario::findOrFail($request->id);
      //aqui se actualizan losa datos del USUARIO
        $usuario->update([
             'nombre' => $request->nombre,
            'ApellidoMat' => $request->ApellidoMat,
            'ApellidoPat' => $request->ApellidoPat,
            'cedula' => $request->cedula,
            'id' => $request->id,
       ]);

        return response()->json([
            'status' => '200',
            'message' => 'Actualizado con éxito USUARIOS!',
         'data' => $usuario
       ]);
     }

    // Método para eliminar un cargo por su ID
    public function delete($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();


        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con éxito Usuario'
        ]);
    }
}
