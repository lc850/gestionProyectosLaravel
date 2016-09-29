<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\proyectos;
use App\usuarios_proyectos;
use DB;

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

    public function asignarUsuarios($id){
        $usuariosP=DB::table('usuarios AS u')
            ->join('usuarios_proyectos AS up', 'u.id', '=', 'up.id_usuario')
            ->where('up.id_proyecto', '=', $id)
            ->select('u.id', 'u.nombre', 'u.edad', 'u.sexo', 'u.correo', 'up.id AS upid')
            ->get();

        $lista=DB::table('usuarios_proyectos')
            ->where('id_proyecto', '=', $id)
            ->lists('id_usuario');

        $usuarios=DB::table('usuarios')
            ->whereNotIn('id', $lista)
            ->get();

        $proyecto=proyectos::find($id);

        return view('asignarUsuarios', compact('usuarios', 'usuariosP', 'proyecto'));
    }

    public function usuarioProyecto($id, Request $datos){
        $nuevo= new usuarios_proyectos;
        $nuevo->id_usuario=$datos->input('id_usu');
        $nuevo->id_proyecto=$id;
        $nuevo->save();

        return Redirect('/asignarUsuarios/'.$id);
    }

    public function quitarUsuario($id){
        $registro=usuarios_proyectos::find($id);
        $id_proyecto=$registro->id_proyecto;
        $registro->delete();

        return Redirect('/asignarUsuarios/'.$id_proyecto);
    }
}
















