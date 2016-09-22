<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado completo de usuarios</title>
</head>
<body>
	<h1>Lista de Usuarios</h1>
	<hr>
	<table>
		<tr>
			<td>#</td>
			<td>Nombre</td>
			<td>Edad</td>
			<td>Sexo</td>
			<td>Correo</td>
		</tr>
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
			</tr>
		@endforeach
	</table>
</body>
</html>





