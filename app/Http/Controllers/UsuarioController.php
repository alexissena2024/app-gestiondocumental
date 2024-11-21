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
            'nombre' => 'required', //este campo debe ser igual al de la BD en este caso USUARIO
            'apellido_materno' => 'required', //este campo debe ser igual al de la BD en este caso USUARIO
            'apellido_paterno' => 'required', //este campo debe ser igual al de la BD en este caso USUARIO
            'cedula' => 'required', //este campo debe ser igual al de la BD en este caso USUARIO
        ]);


     $usuario = Usuario::create([
            'nombre' => $request->nombre, //este campo debe ser igual al de la BD en este caso USUARIO Y se va emplear desde postman con el mismo nombre
            'apellido_materno' => $request->apellido_materno, //este campo debe ser igual al de la BD en este caso USUARIO Y se va emplear desde postman con el mismo nombre
            'apellido_paterno' => $request->apellido_paterno, //este campo debe ser igual al de la BD en este caso USUARIO Y se va emplear desde postman con el mismo nombre
            'cedula' => $request->cedula, //este campo debe ser igual al de la BD en este caso USUARIO Y se va emplear desde postman con el mismo nombre
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
        $usuario = Usuario::where('id', $request->id)->get(); // Trae el usuario correspondiente al ID

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de Usuario',
            'data' => $usuario
        ]);
    }

     
 
  // Método para actualizar un usuario
  public function actualizar(Request $request)
  {

    //estoss campo debe ser igual al de la BD en este caso USUARIO 
      $request->validate([
          'id' => 'required', 
          'apellido_materno' => 'required',
          'apellido_paterno' => 'required',
          'cedula' => 'required',
      ]);

        $usuario = Usuario::findOrFail($request->id);
      //aqui se actualizan losa datos del USUARIO
      $usuario->update([
        'nombre' => $request->nombre, // el campo despues de la ->se debe utilizar en postman 
        'apellido_materno' => $request->apellido_materno, // el campo despues de la ->se debe utilizar en postman
        'apellido_paterno' => $request->apellido_paterno, // el campo despues de la ->se debe utilizar en postman
        'cedula' => $request->cedula,
    ]);

    return response()->json([
        'status' => '200',
        'message' => 'Actualizado con éxito Usuario!',
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
