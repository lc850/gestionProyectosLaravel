@extends('principal')
@section('encabezado')
	<h2>Registro de Usuarios</h2>
@stop

@section('contenido')
	<form action="" method="POST">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input name="nombre" class="form-control" placeholder="Nombre" type="text" required>
		</div>
		<div class="form-group">
			<label for="Edad">Edad:</label>
			<input name="edad" type="number" class="form-control" placeholder="Edad" required>
		</div>
		<div class="form-group">
			<label for="Sexo">Sexo:</label>
			<select name="sexo" class="form-control" required>
				<option value="">Sexo</option>
				<option value="0">Femenino</option>
				<option value="1">Masculino</option>
			</select>
		</div>
		<div class="form-group">
			<label for="Correo">Correo:</label>
			<input name="correo" class="form-control" placeholder="Correo" type="email" required>
		</div>
		<input type="submit" value="Registrar" class="btn btn-primary">
		<a href="{{url('inicio')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop