<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use App\Http\Requests;

class usuariosController extends Controller
{
    public function guardar(Request $request){
    	$nombre=$request->input('nombre');
    	$edad=$request->input('edad');
    	$sexo=$request->input('sexo');
    	$correo=$request->input('correo');

    	//Guardar en BD

    	$nuevo = new usuarios;
    	$nuevo->nombre= $nombre;
    	$nuevo->edad=$edad;
    	$nuevo->sexo=$sexo;
    	$nuevo->correo=$correo;
    	$nuevo->save();

    	return Redirect('/registrarUsuario');

    }

    public function consultar(){
        $usuarios=usuarios::all();
        return view('consultarUsuarios', compact('usuarios'));
    }











}
