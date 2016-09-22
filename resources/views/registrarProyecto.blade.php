@extends('principal')

@section('encabezado')
	<h2>Registar Proyecto</h2>
@stop

@section('contenido')
	<form action="{{url('/guardarProyecto')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="Fecha de Inicio">Fecha de Inicio:</label>
			<input type="date" class="form-control" required name="f_inicio">
		</div>
		<div class="form-group">
			<label for="Fecha de Terminación">Fecha de Terminación:</label>
			<input type="date" class="form-control" required name="f_fin">
		</div>
		
		<input type="submit" class="btn btn-primary" value="Registrar">
		<a href="" class="btn btn-danger">Cancelar</a>
	</form>
@stop





