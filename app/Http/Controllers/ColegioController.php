<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colegio; //IMPORTO EL MODELO*********

class ColegioController extends Controller
{
     // Método para guardar un nuevo cargo
     public function save(Request $request)
     {
         $request->validate([
             'nombre_colegio' => 'required', //este campo debe ser igual al de la BD en este caso COLEGIO
             
         ]);
 
 
      $colegio = Colegio::create([
             'nombre_colegio' => $request->nombre_colegio, //este campo debe ser igual al de la BD en este caso COLEGIO Y se va emplear desde postman con el mismo nombre
             
         ]);
 
         return response()->json([
             'status' => '200',
             'message' => 'Guardado con éxito en colegio',
             'data' => $colegio
         ]);
     }
 
     // Método para obtener todos los usuarios
     public function getData()
     {
         $colegio = Colegio::all();
 
         return response()->json([
             'status' => '200',
             'message' => 'Datos obtenidos con éxito de COLEGIO',
             'data' => $colegio
         ]);
     }
 
 
     // Método para obtener un COLEGIO por su ID
      
      
     public function getDataById(Request $request)
     {
         // Realizar la consulta
         $colegio = Colegio::where('id', $request->id)->get(); // Trae el colegio correspondiente al ID
        
         // Verificar si la colección no está vacía
         if ($colegio->isNotEmpty()) {
             return response()->json([
                 'status' => '200',
                 'message' => 'Datos obtenidos con éxito de colegio',
                 'data' => $colegio
             ]);
         } else {
             // En caso de que no se encuentre el registro
             return response()->json([
                 'status' => '404',
                 'message' => 'No se encontró el colegio con el ID proporcionado',
                 'data' => []
             ]);
         }
     }
     
 
      
  
   // Método para actualizar un COLEGIO
   public function actualizar(Request $request)
   {
 
     //estoss campo debe ser igual al de la BD en este caso COLEGIO 
       $request->validate([
           'id' => 'required', 
           'nombre_colegio' => 'required',
        
       ]);
 
         $colegio = Colegio::findOrFail($request->id);
       //aqui se actualizan losa datos del colegio
       $colegio->update([
         'nombre_colegio' => $request->nombre_colegio, // el campo despues de la ->se debe utilizar en postman 
         
     ]);
 
     return response()->json([
         'status' => '200',
         'message' => 'Actualizado con éxito COLEGIO!',
         'data' => $colegio
     ]);
 }
 

       // Método para eliminar un colegio por su ID
       public function delete(Request $request)

       {

       
        $colegio = Colegio::findOrFail($request->id);
         
           if($colegio){

            $colegio->delete();


            return response()->json([
                'status' => '200',
                'message' => 'Se elimino el registro para colegio'
                
            ]);
           }else{

            return response()->json([
                'status' => '201',
                'message' => 'ID NO ENCONTRADO'
            ]);
           }  
       }
   }
   
 