@extends('admin.layout')

@section('content')

<h1>Estatus
	<a href=" {{ url('admin/estatus/create') }} " class="btn btn-primary">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Nuevo
	</a>
</h1>

<table class="table table-striped">
	<thead>
	  	<tr>
	    	<th>id</th>
	    	<th>Nombre</th>
	    	<th>Actividades</th>
	  	</tr>
	</thead>
	<tbody>
		@foreach($estatuses as $estatus)
	  	<tr>
	    	<td>{{ $estatus->id }}</td>
	    	<td>{{ $estatus->nombre }}</td>
	    	<td>
	    		<div class="btn-group">
	    			<a href="{{ route('admin.estatus.edit', $estatus->id) }}" type="button" class="btn btn-primary">
	    				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
	    				Editar
	    			</a>
	    			{!! Form::open(['route' => ['admin.estatus.destroy', $estatus], 
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