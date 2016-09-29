<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 // Route::get('/', function () {
 //     return view('welcome');
 // });

 // Route::get('/ejemplo', 'ejemploController@index');

//Route::get('/inicio', 'ejemploController@inicio');

//Muestra formulario de registro
//Route::get('/registroUsuarios', 'ejemploController@registroUsuarios');

//Route::get('/ejemplo', 'usuariosController@ejemplo');

Route::get('/', 'principalController@index');

Route::get('/home', 'principalController@home');

Route::get('/registrarUsuario', 'principalController@registrarUsuario');

Route::post('/guardarUsuario', 'usuariosController@guardar');

Route::get('/consultarUsuarios', 'usuariosController@consultar');

Route::get('/eliminarUsuario/{id}', 'usuariosController@eliminar');

Route::get('/actualizarUsuario/{id}', 'usuariosController@actualizar');

Route::post('/actualizar/{id}', 'usuariosController@actualizarUsuario');

Route::get('/registrarProyectos', 'proyectosController@registrar');

Route::post('/guardarProyecto', 'proyectosController@guardar');

Route::get('/consultarProyectos', 'proyectosController@consultar');

Route::get('/eliminarProyecto/{id}', 'proyectosController@eliminar');

Route::get('/pdfUsuarios', 'usuariosController@pdfUsuarios');

Route::get('/asignarUsuarios/{idp}', 'proyectosController@asignarUsuarios');

Route::post('/usuarioProyecto/{idp}', 'proyectosController@usuarioProyecto');

Route::get('/quitarUsuario/{id}', 'proyectosController@quitarUsuario');

























