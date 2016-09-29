@extends('principal')

@section('encabezado')
	<h2>Proyecto: {{$proyecto->nombre}}</h2>
@stop

@section('contenido')
	<form action="{{url('/usuarioProyecto')}}/{{$proyecto->id}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<select name="id_usu" class="form-control">
				@foreach($usuarios as $u)
					<option value="{{$u->id}}">{{$u->nombre}}</option>
				@endforeach
			</select>
		</div>
		<input type="submit" value="Asignar" class="btn btn-primary">
	</form>
	<h2>Lista de usuarios asignados</h2>
	<hr>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Correo</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuariosP as $up)
				<tr>
					<td>{{$up->id}}</td>
					<td>{{$up->nombre}}</td>
					<td>{{$up->edad}}</td>
					@if($up->sexo==0)
					<td>Masculino</td>
					@else
					<td>Femenino</td>
					@endif
					<td>{{$up->correo}}</td>
					<td>
						<a href="{{url('/quitarUsuario')}}/{{$up->upid}}" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-user" aria-hidden="true">Quitar</span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop











