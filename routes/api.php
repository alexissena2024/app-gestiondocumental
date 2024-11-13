<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SeguridadController;
use App\Http\Controllers\informeController;
use App\Http\Controllers\AccionController;
use App\Http\Controllers\ColegioController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\infcolegioController;
use App\Http\Controllers\ColsistemaController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\DiscoduroController;
use App\Http\Controllers\OfimaticaController;
use App\Http\Controllers\AntiviruController;
use App\Http\Controllers\LocalcolegioController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\AreaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Define una ruta API para USUARIOS
Route::get('/usuario/getData', [UsuarioController::class, 'getData']);
Route::post('/usuario/save',     [UsuarioController::class, 'save']);
Route::put('/usuario/update',     [UsuarioController::class, 'actualizar']);
Route::delete('/usuario/delete',     [UsuarioController::class, 'delete']);


// Define una ruta API para SEGURIDAD
 Route::get('/Seguridad/getData',[SeguridadController::class, 'getData']);
 Route::post('/Seguridad/save', [SeguridadController::class, 'save']);
 Route::put('/Seguridad/update', [SeguridadController::class, 'actualizar']);
 Route::delete('/Seguridad/delete',[SeguridadController::class, 'delete']);


//  //ENFORMA DE GRUPO
//  Route::controller(UsuarioController::class)->group(function () {
//     Route::get('/usuario/getdata', 'getData');
//     Route::post('/usuario/save', 'save');
//     Route::put('/usuario/update', 'actualizar');
//     Route::delete('/usuario/delete', 'delete');
// });


// Define una ruta API para INFORME
 Route::get('/informe/getData',[informeController::class, 'getData']);
 Route::post('/informe/save', [informeController::class, 'save']);
 Route::put('/informe/update', [informeController::class, 'actualizar']);
 Route::delete('/informe/delete',[informeController::class, 'delete']);

 // Define una ruta API para ACCIONES
 Route::get('/Accion/getData',[AccionController::class, 'getData']);
 Route::post('/Accion/save', [AccionController::class, 'save']);
 Route::put('/Accion/update', [AccionController::class, 'actualizar']);
 Route::delete('/Accion/delete',[AccionController::class, 'delete']);


  // Define una ruta API para COLEGIO
  Route::get('/Colegio/getData',[ColegioController::class, 'getData']);
  Route::post('/Colegio/save', [ColegioController::class, 'save']);
  Route::put('/Colegio/update', [ColegioController::class, 'actualizar']);
  Route::delete('/Colegio/delete',[ColegioController::class, 'delete']);


   // Define una ruta API para SISTEMA
   Route::get('/Sistema/getData',[SistemaController::class, 'getData']);
   Route::post('/Sistema/save', [SistemaController::class, 'save']);
   Route::put('/Sistema/update', [SistemaController::class, 'actualizar']);
   Route::delete('/Sistema/delete',[SistemaController::class, 'delete']);


      // Define una ruta API para infcolegio
      Route::get('/infcolegio/getData',[infcolegioController::class, 'getData']);
      Route::post('/infcolegio/save', [infcolegioController::class, 'save']);
      Route::put('/infcolegio/update', [infcolegioController::class, 'actualizar']);
      Route::delete('/infcolegio/delete',[infcolegioController::class, 'delete']);


      
      // Define una ruta API para Colsistema
      Route::get('/Colsistema/getData',[ColsistemaController::class, 'getData']);
      Route::post('/Colsistema/save', [ColsistemaController::class, 'save']);
      Route::put('/Colsistema/update', [ColsistemaController::class, 'actualizar']);
      Route::delete('/Colsistema/delete',[ColsistemaController::class, 'delete']);

      // Define una ruta API para LOCALIDAD
      Route::get('/Localidad/getData',[LocalidadController::class, 'getData']);
      Route::post('/Localidad/save', [LocalidadController::class, 'save']);
      Route::put('/Localidad/update', [LocalidadController::class, 'actualizar']);
      Route::delete('/Localidad/delete',[LocalidadController::class, 'delete']);

      // Define una ruta API para SEDE
      Route::get('/Sede/getData',[SedeController::class, 'getData']);
      Route::post('/Sede/save', [SedeController::class, 'save']);
      Route::put('/Sede/update', [SedeController::class, 'actualizar']);
      Route::delete('/Sede/delete',[SedeController::class, 'delete']);



      // Define una ruta API para DEPENDENCIA
      Route::get('/Dependencia/getData',[DependenciaController::class, 'getData']);
      Route::post('/Dependencia/save', [DependenciaController::class, 'save']);
      Route::put('/Dependencia/update', [DependenciaController::class, 'actualizar']);
      Route::delete('/Dependencia/delete',[DependenciaController::class, 'delete']);

         // Define una ruta API para MARCAS
         Route::get('/Marca/getData',[MarcaController::class, 'getData']);
         Route::post('/Marca/save', [MarcaController::class, 'save']);
         Route::put('/Marca/update', [MarcaController::class, 'actualizar']);
         Route::delete('/Marca/delete',[MarcaController::class, 'delete']);

           // Define una ruta API para MODELO
           Route::get('/Modelo/getData',[ModeloController::class, 'getData']);
           Route::post('/Modelo/save', [ModeloController::class, 'save']);
           Route::put('/Modelo/update', [ModeloController::class, 'actualizar']);
           Route::delete('/Modelo/delete',[ModeloController::class, 'delete']);


            // Define una ruta API para MEMORIA
            Route::get('/Memoria/getData',[MemoriaController::class, 'getData']);
            Route::post('/Memoria/save', [MemoriaController::class, 'save']);
            Route::put('/Memoria/update', [MemoriaController::class, 'actualizar']);
            Route::delete('/Memoria/delete',[MemoriaController::class, 'delete']);


              // Define una ruta API para DISCO DURO
              Route::get('/Discoduro/getData',[DiscoduroController::class, 'getData']);
              Route::post('/Discoduro/save', [DiscoduroController::class, 'save']);
              Route::put('/Discoduro/update', [DiscoduroController::class, 'actualizar']);
              Route::delete('/Discoduro/delete',[DiscoduroController::class, 'delete']);

              // Define una ruta API para OFIMATICA
              Route::get('/Ofimatica/getData',[OfimaticaController::class, 'getData']);
              Route::post('/Ofimatica/save', [OfimaticaController::class, 'save']);
              Route::put('/Ofimatica/update', [OfimaticaController::class, 'actualizar']);
              Route::delete('/Ofimatica/delete',[OfimaticaController::class, 'delete']);

              // Define una ruta API para ANTIVIRUS
              Route::get('/Antiviru/getData',[AntiviruController::class, 'getData']);
              Route::post('/Antiviru/save', [AntiviruController::class, 'save']);
              Route::put('/Antiviru/update', [AntiviruController::class, 'actualizar']);
              Route::delete('/Antiviru/delete',[AntiviruController::class, 'delete']);


              // Define una ruta API para LOCALCOLEGIO
              Route::get('/Localcolegio/getData',[LocalcolegioController::class, 'getData']);
              Route::post('/Localcolegio/save', [LocalcolegioController::class, 'save']);
              Route::put('/Localcolegio/update', [LocalcolegioController::class, 'actualizar']);
              Route::delete('/Localcolegio/delete',[LocalcolegioController::class, 'delete']);

               // Define una ruta API paraTIPO DE ELEMENTO
               Route::get('/Tipoelemento/getData',[ElementoController::class, 'getData']);
               Route::post('/Tipoelemento/save', [ElementoController::class, 'save']);
               Route::put('/Tipoelemento/update', [ElementoController::class, 'actualizar']);
               Route::delete('/Tipoelemento/delete',[ElementoController::class, 'delete']);


               // Define una ruta API paraTIPO DE CARGOS
                Route::get('/Cargo/getData',[CargoController::class, 'getData']);
                Route::post('/Cargo/save', [CargoController::class, 'save']);
                Route::put('/Cargo/update', [CargoController::class, 'actualizar']);
                Route::delete('/Cargo/delete',[CargoController::class, 'delete']);

                // Define una ruta API paraTIPO DE AREAS
                Route::get('/Area/getData',[AreaController::class, 'getData']);
                Route::post('/Area/save', [AreaController::class, 'save']);
                Route::put('/Area/update', [AreaController::class, 'actualizar']);
                Route::delete('/Area/delete',[AreaController::class, 'delete']);