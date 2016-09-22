<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\proyectos;

class proyectosController extends Controller
{
    public function registrar(){
    	return view('registrarProyecto');
    }

    public function guardar(Request $datos){
    	$proyecto= new proyectos;
    	$proyecto->nombre=$datos->input('nombre');
    	$proyecto->f_inicio=$datos->input('f_inicio');
    	$proyecto->f_fin=$datos->input('f_fin');
    	$proyecto->save();

    	return Redirect('/consultarProyectos');
    }

    public function consultar(){
    	$proyectos=proyectos::all();
    	return view('consultarProyectos', compact('proyectos'));
    }

    public function eliminar($id){
        proyectos::find($id)->delete();
        return Redirect('/consultarProyectos');
    }
}
