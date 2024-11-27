<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salasistema; // Importa correctamente el modelo Salasistema

class SalasistemaController extends Controller
{
    // Método para guardar una nueva SALASISTEMA
    public function save(Request $request)
    {
        $request->validate([
            'nom_salasistema' => 'required', //este campo debe ser igual al de la BD en este caso SALASISTEMAS
           
        ]);


     $salasistema = Salasistema::create([
            'nom_salasistema' => $request->nom_salasistema, //este campo debe ser igual al de la BD en este caso salasistemas Y se va emplear desde postman con el mismo nombre
           
           
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'Guardado con éxito en salasistemas',
            'data' => $salasistema
        ]);
    }

    // Método para obtener todos la sala de sistemas
    public function getData()
    {
        $salasistema = Salasistema::all();

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito SALA DE SISTEMAS',
            'data' => $salasistema
        ]);
    }


    // Método para obtener una dependencia por su ID
     
    public function getDataById(Request $request)
    {
        $salasistema = Salasistema::where('id', $request->id)->get(); // Trae la nom_salasistema  correspondiente al ID

        return response()->json([
            'status' => '200',
            'message' => 'Datos obtenidos con éxito de Sala de sistemas',
            'data' => $salasistema
        ]);
    }

     
 
  // Método para actualizar una sala de sistemas
  public function actualizar(Request $request)
  {

    //estos campo debe ser igual al de la BD en este caso sala de sistemas 
      $request->validate([
          'id' => 'required', 
          'nom_salasistema' => 'required',
          
      ]);

      $salasistema = Salasistema::findOrFail($request->id);
      //aqui se actualizan losa datos de la sala sistema
      $salasistema->update([
        'nom_salasistema' => $request->nom_salasistema, // el campo despues de la ->se debe utilizar en postman 
       
        
    ]);

    return response()->json([
        'status' => '200',
        'message' => 'Actualizado con éxito SALA de SISTEMAS!',
        'data' => $salasistema
    ]);
}

    // Método para eliminar una sala de sistemas por su ID
    public function delete(Request $request)
    {
        $salasistema =  Salasistema::findOrFail($request->id);
        $salasistema->delete();


        return response()->json([
            'status' => '200',
            'message' => 'Eliminado con éxito SALA de Sistemas'
        ]);
    }
}
