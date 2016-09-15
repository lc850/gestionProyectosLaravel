
@extends('principal2')

@section('encabezado')
	<h2>Consultar Usuarios</h2>
@stop

@section('contenido')
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
			@foreach($usuarios as $u)
				<tr>
					<td>{{$u->id}}</td>
					<td>{{$u->nombre}}</td>
					<td>{{$u->edad}}</td>
					<td>
						@if($u->sexo==0)
							Masculino
						@else
							Femenino
						@endif
					</td>
					<td>{{$u->correo}}</td>
					<td>
						<a href="#" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span></a>

						<a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop








