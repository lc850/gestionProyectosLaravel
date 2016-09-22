
@extends('principal')

@section('encabezado')
	<h2>Consultar Proyectos</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Descripción</th>
				<th>Inicio</th>
				<th>Fin</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($proyectos as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->nombre}}</td>
					<td>{{$p->f_inicio}}</td>
					<td>{{$p->f_fin}}</td>
					<td>
						<a href="" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span></a>

						<a href="{{url('/eliminarProyecto')}}/{{$p->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop








