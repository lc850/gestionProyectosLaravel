@extends('principal')

@section('encabezado')
	<h2>Actualizar Usuario</h2>
@stop

@section('contenido')
	<form action="{{url('/actualizar')}}/{{$user->id}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required value="{{$user->nombre}}">
		</div>
		<div class="form-group">
			<label for="edad">Edad</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->edad}}">
		</div>
		<div class="form-group">
			<label for="sexo">Sexo</label>
			<select name="sexo" class="form-control" required>
				<option value="">Sexo</option>
				@if($user->sexo==0)
				<option value="0" selected>Masculino</option>
				<option value="1">Femenino</option>
				@else
				<option value="0">Masculino</option>
				<option value="1" selected>Femenino</option>
				@endif
			</select>
		</div>
		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="email" class="form-control" name="correo" required value="{{$user->correo}}">
		</div>
		<input type="submit" class="btn btn-primary" value="Actualizar">
		<a href="{{url('/consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop





