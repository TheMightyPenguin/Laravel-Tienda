@extends('admin.layout')

@section('content')

<h1>Productos
	<a href=" {{ route('admin.productos.create') }} " class="btn btn-primary">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Nuevo
	</a>
</h1>

<table class="table table-striped">
	<thead>
		<tr>
    	<th>id</th>
    	<th>Nombre</th>
    	<th>Cantidad</th>
    	<th>Precio</th>
    	<th>Descripcion</th>
    	<th>Dueño</th>
			<th>Estatus</th>
    	<th>Categoria</th>
			<th>Marca</th>
			<th>Tipo</th>
			<th>Acciones</th>
  	</tr>
	</thead>
	<tbody>
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
	    			<a href="{{ route('admin.productos.edit', $producto->id) }}" type="button" class="btn btn-primary">
	    				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
	    				Editar
	    			</a>
	    			<a href="#" onclick="deleteModel()" type="button" class="btn btn-danger">
	    				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
	    				Eliminar
	    			</a>
  				</div>
  				{!! Form::open(['route' => ['admin.productos.destroy', $producto],
	    			            'method' => 'delete', 'class' => 'form-hidden']) !!}
            	{!! Form::close() !!}
	    	</td>
	  	</tr>
		@endforeach
	</tbody>
</table>

@endsection
