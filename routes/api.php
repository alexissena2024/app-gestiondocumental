<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SeguridadController;
use App\Http\Controllers\informeController;
use App\Http\Controllers\AccionController;
use App\Http\Controllers\ColegioController;
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
use App\Http\Controllers\SalasistemaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Define rutas API para los controladores con las correcciones de parámetros y métodos


// Define una ruta API para SEGURIDAD
Route::get('/Seguridad/getData', [SeguridadController::class, 'getData']);
Route::post('/Seguridad/save', [SeguridadController::class, 'save']);
Route::put('/Seguridad/update/{id}', [SeguridadController::class, 'actualizar']);
Route::delete('/Seguridad/delete/{id}', [SeguridadController::class, 'delete']);

// Define una ruta API para INFORME
Route::get('/informe/getData', [informeController::class, 'getData']);
Route::post('/informe/save', [informeController::class, 'save']);
Route::put('/informe/update/{id}', [informeController::class, 'actualizar']);
Route::delete('/informe/delete/{id}', [informeController::class, 'delete']);

// Define una ruta API para ACCIONES
Route::get('/Accion/getData', [AccionController::class, 'getData']);
Route::post('/Accion/save', [AccionController::class, 'save']);
Route::put('/Accion/update/{id}', [AccionController::class, 'actualizar']);
Route::delete('/Accion/delete/{id}', [AccionController::class, 'delete']);




// Define una ruta API para infcolegio
Route::get('/infcolegio/getData', [infcolegioController::class, 'getData']);
Route::post('/infcolegio/save', [infcolegioController::class, 'save']);
Route::put('/infcolegio/update/{id}', [infcolegioController::class, 'actualizar']);
Route::delete('/infcolegio/delete/{id}', [infcolegioController::class, 'delete']);

// Define una ruta API para Colsistema
Route::get('/Colsistema/getData', [ColsistemaController::class, 'getData']);
Route::post('/Colsistema/save', [ColsistemaController::class, 'save']);
Route::put('/Colsistema/update/{id}', [ColsistemaController::class, 'actualizar']);
Route::delete('/Colsistema/delete/{id}', [ColsistemaController::class, 'delete']);

// Define una ruta API para LOCALIDAD
Route::get('/Localidad/getData', [LocalidadController::class, 'getData']);
Route::post('/Localidad/save', [LocalidadController::class, 'save']);
Route::put('/Localidad/update/{id}', [LocalidadController::class, 'actualizar']);
Route::delete('/Localidad/delete/{id}', [LocalidadController::class, 'delete']);

// Define una ruta API para SEDE
Route::get('/Sede/getData', [SedeController::class, 'getData']);
Route::post('/Sede/save', [SedeController::class, 'save']);
Route::put('/Sede/update/{id}', [SedeController::class, 'actualizar']);
Route::delete('/Sede/delete/{id}', [SedeController::class, 'delete']);



// Define una ruta API para MARCAS
Route::get('/Marca/getData', [MarcaController::class, 'getData']);
Route::post('/Marca/save', [MarcaController::class, 'save']);
Route::put('/Marca/update/{id}', [MarcaController::class, 'actualizar']);
Route::delete('/Marca/delete/{id}', [MarcaController::class, 'delete']);

// Define una ruta API para MODELO
Route::get('/Modelo/getData', [ModeloController::class, 'getData']);
Route::post('/Modelo/save', [ModeloController::class, 'save']);
Route::put('/Modelo/update/{id}', [ModeloController::class, 'actualizar']);
Route::delete('/Modelo/delete/{id}', [ModeloController::class, 'delete']);

// Define una ruta API para MEMORIA
Route::get('/Memoria/getData', [MemoriaController::class, 'getData']);
Route::post('/Memoria/save', [MemoriaController::class, 'save']);
Route::put('/Memoria/update/{id}', [MemoriaController::class, 'actualizar']);
Route::delete('/Memoria/delete/{id}', [MemoriaController::class, 'delete']);

// Define una ruta API para DISCO DURO
Route::get('/Discoduro/getData', [DiscoduroController::class, 'getData']);
Route::post('/Discoduro/save', [DiscoduroController::class, 'save']);
Route::put('/Discoduro/update/{id}', [DiscoduroController::class, 'actualizar']);
Route::delete('/Discoduro/delete/{id}', [DiscoduroController::class, 'delete']);

// Define una ruta API para OFIMATICA
Route::get('/Ofimatica/getData', [OfimaticaController::class, 'getData']);
Route::post('/Ofimatica/save', [OfimaticaController::class, 'save']);
Route::put('/Ofimatica/update/{id}', [OfimaticaController::class, 'actualizar']);
Route::delete('/Ofimatica/delete/{id}', [OfimaticaController::class, 'delete']);

// Define una ruta API para ANTIVIRUS
Route::get('/Antiviru/getData', [AntiviruController::class, 'getData']);
Route::post('/Antiviru/save', [AntiviruController::class, 'save']);
Route::put('/Antiviru/update/{id}', [AntiviruController::class, 'actualizar']);
Route::delete('/Antiviru/delete/{id}', [AntiviruController::class, 'delete']);

// Define una ruta API para LOCALCOLEGIO
Route::get('/Localcolegio/getData', [LocalcolegioController::class, 'getData']);
Route::post('/Localcolegio/save', [LocalcolegioController::class, 'save']);
Route::put('/Localcolegio/update/{id}', [LocalcolegioController::class, 'actualizar']);
Route::delete('/Localcolegio/delete/{id}', [LocalcolegioController::class, 'delete']);

// Define una ruta API para TIPO DE ELEMENTO
Route::get('/Tipoelemento/getData', [ElementoController::class, 'getData']);
Route::post('/Tipoelemento/save', [ElementoController::class, 'save']);
Route::put('/Tipoelemento/update/{id}', [ElementoController::class, 'actualizar']);
Route::delete('/Tipoelemento/delete/{id}', [ElementoController::class, 'delete']);



// Define una ruta API para USUARIOS
Route::get('/usuario/getData', [UsuarioController::class, 'getData']);
Route::get('usuario/datosById', [UsuarioController::class, 'getDataById']);
Route::post('/usuario/save', [UsuarioController::class, 'save']);
Route::put('/usuario/update', [UsuarioController::class, 'actualizar']);
Route::delete('/usuario/delete/{id}', [UsuarioController::class,'delete']);

// Define una ruta API para TIPO DE CARGOS
Route::get('/Cargo/getData', [CargoController::class, 'getData']);
Route::get('Cargo/datosById', [CargoController::class, 'getDataById']);
Route::post('/Cargo/save', [CargoController::class, 'save']);
Route::put('/Cargo/update', [CargoController::class, 'actualizar']);
Route::delete('/Cargo/delete/{id}', [CargoController::class, 'delete']);



// Define una ruta API para COLEGIO
Route::get('/Colegio/getData',[ColegioController::class,'getData']);
Route::get('Colegio/datosById',[ColegioController::class,'getDataById']);
Route::post('/Colegio/save',[ColegioController::class,'save']);
Route::put('/Colegio/update/',[ColegioController::class,'actualizar']);
Route::delete('/Colegio/delete/{id}',[ColegioController::class,'delete']);


// Define una ruta API para DEPENDENCIA
Route::get('/Dependencia/getData', [DependenciaController::class, 'getData']);
Route::get('Dependencia/datosById',[DependenciaController::class,'getDataById']);
Route::post('/Dependencia/save', [DependenciaController::class, 'save']);
Route::put('/Dependencia/update/', [DependenciaController::class, 'actualizar']);
Route::delete('/Dependencia/delete/{id}', [DependenciaController::class, 'delete']);


// Define una ruta API para SISTEMA
Route::get('/Salasistema/getData', [SalasistemaController::class, 'getData']);
Route::get('Salasistema/datosById',[SalasistemaController::class,'getDataById']);
Route::post('/Salasistema/save', [SalasistemaController::class, 'save']);
Route::put('/Salasistema/update/', [SalasistemaController::class, 'actualizar']);
Route::delete('/Salasistema/delete/{id}', [SalasistemaController::class, 'delete']);

// Define una ruta API para TIPO DE AREAS
Route::get('/Area/getData', [AreaController::class, 'getData']);
Route::post('/Area/save', [AreaController::class, 'save']);
Route::put('/Area/update/{id}', [AreaController::class, 'actualizar']);
Route::delete('/Area/delete/{id}', [AreaController::class, 'delete']);
