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

 // Route::get('/inicio', 'ejemploController@inicio');



//Route::get('/ejemplo', 'usuariosController@ejemplo');

Route::get('/', 'principalController@index');

Route::get('/home', 'principalController@home');

Route::get('/registrarUsuario', 'principalController@registrarUsuario');

Route::post('/guardarUsuario', 'usuariosController@guardar');

Route::get('/consultarUsuarios', 'usuariosController@consultar');







































