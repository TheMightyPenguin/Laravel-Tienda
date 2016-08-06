@foreach($productos as $producto)
	<tr>
	<td>{{ $producto->id }}</td>
	<td>{{ $producto->nombre }}</td>
	<td>{{ $producto->cantidad }}</td>
		<td>{{ $producto->precio }}</td>
	<td>{{ str_limit($producto->descripcion, 10) }}</td>
	<td>{{ $producto->usuario->nombre }}</td>
	<td>{{ $producto->estatus->nombre }}</td>
		<td>{{ $producto->categoria->nombre }}</td>
		<td>{{ $producto->marca->nombre }}</td>
	<td>{{ $producto->tipoProducto->nombre }}</td>
	<td>
		<div class="btn-group">
			<a href="{{ route('admin.productos.show', $producto->id) }}" type="button" id="{{ $producto->id }}" class="show-button btn btn-success" data-toggle="modal" data-target="#myModal">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				Ver
			</a>
			<a href="{{ route('admin.productos.edit', $producto->id) }}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				Editar
			</a>
			<a href="#" onclick="deleteModel({{ $producto->id }})" type="button" class="btn btn-danger">
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				Eliminar
			</a>
			</div>
			{!! Form::open(['route' => ['admin.productos.destroy', $producto],
			            'method' => 'delete', 'class' => 'form-hidden', 'id' => "form-$producto->id"]) !!}
    	{!! Form::close() !!}
	</td>
	</tr>
@endforeach
