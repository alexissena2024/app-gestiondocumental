<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia; // Importa correctamente el modelo dependencia

class DependenciaController extends Controller
{
    // Método para guardar una nueva dependencia
    public function save(Request $request)
    {
        $request->validate([
            'nomdependencia' => 'required', //este campo debe ser igual al de la BD en este caso dependencias
            'piso' => 'required', //este campo debe ser igual al de la BD en este caso dependencias
            
        ]);


     $dependencia = Dependencia::create([
            'nomdependencia' => $request->nomdependencia, //este campo debe ser igual al de la BD en este caso dependencias Y se va emplear desde postman con el mismo nombre
            'piso' => $request->piso, //este campo debe ser igual al de la BD en este caso dependencias Y se va emplear desde postman con el mismo nombre
           
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito en dependencia',
            'data' => $dependencia
        ]);
    }

    // Método para obtener todos las dependencias
    public function getData()
    {
        $dependencia = Dependencia::all();

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de dependencias',
            'data' => $dependencia
        ]);
    }


    // Método para obtener una dependencia por su ID
     
    public function getDataById(Request $request)
    {
        $dependencia = Dependencia::where('id', $request->id)->get(); // Trae la dependencia  correspondiente al ID

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de dependencia',
            'data' => $dependencia
        ]);
    }

     
 
  // Método para actualizar una dependencia
  public function actualizar(Request $request)
  {

    //estoss campo debe ser igual al de la BD en este caso dependencias 
      $request->validate([
          'id' => 'required', 
          'nomdependencia' => 'required',
          'piso' => 'required',
      ]);

        $dependencia = Dependencia::findOrFail($request->id);
      //aqui se actualizan losa datos de la dependencia
      $dependencia->update([
        'nomdependencia' => $request->nomdependencia, // el campo despues de la ->se debe utilizar en postman 
        'piso' => $request->piso, // el campo despues de la ->se debe utilizar en postman
        
    ]);

    return response()->json([
        'status' => '200',
        'message' => 'Actualizado con éxito Dependencia!',
        'data' => $dependencia
    ]);
}

    // Método para eliminar una dependencia por su ID
    public function delete(Request $request)
    {
        $dependencia = Dependencia::findOrFail($request->id);
         $dependencia->delete();


        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con éxito DEPENDENCIA'
        ]);
    }
}
