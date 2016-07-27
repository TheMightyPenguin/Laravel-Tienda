@extends('admin.layout')

@section('content')

<h1>Usuarios
	<a href=" {{ route('admin.usuarios.create') }} " class="btn btn-primary">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Nuevo
	</a>
</h1>

<table class="table table-striped">
	<thead>
		<tr>
    	<th>id</th>
    	<th>Nombre</th>
    	<th>Apellido</th>
    	<th>Email</th>
    	<th>Telefono</th>
    	<th>Contraseña</th>
    	<th>Estatus</th>
			<th>Tipo</th>
			<th>Ubicacion</th>
    	<th>Actividades</th>
  	</tr>
	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
	  	<tr>
	    	<td>{{ $usuario->id }}</td>
	    	<td>{{ $usuario->nombre }}</td>
	    	<td>{{ $usuario->apellido }}</td>
	    	<td>{{ $usuario->email }}</td>
	    	<td>{{ $usuario->telefono }}</td>
	    	<td>{{ str_limit($usuario->password, 10) }}</td>
	    	<td>{{ $usuario->estatus->nombre }}</td>
	    	<td>{{ $usuario->tipousuario->nombre }}</td>
	    	<td>{{ $usuario->ubicacion->nombre }}</td>
	    	<td>
	    		<div class="btn-group">
	    			<a href="{{ route('admin.usuarios.edit', $usuario->id) }}" type="button" class="btn btn-primary">
	    				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
	    				Editar
	    			</a>
	    			{!! Form::open(['route' => ['admin.usuarios.destroy', $usuario],
	    			                'method' => 'delete', 'class' => 'form-inline']) !!}

	    				<button class="btn btn-danger" type="submit">
	    					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
	    					Eliminar
	    				</button>
	    			{!! Form::close() !!}
  				</div>
	    	</td>
	  	</tr>
		@endforeach
	</tbody>
</table>

@endsection
