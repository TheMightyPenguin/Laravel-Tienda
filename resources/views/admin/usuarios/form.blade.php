@extends('admin.layout')

@section('content')

@if (isset($usuario))
	<h1>Editar usuario</h1>
	<hr>
	{!! Form::model($usuario, ['route' => ['admin.usuarios.update', $usuario], 'method' => 'patch']) !!}
@else
	<h1>Crear usuario</h1>
	<hr>
	{!! Form::open(['route' => 'admin.usuarios.store']) !!}
@endif
	
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre') !!}
		{!! Form::text('nombre', null, 
			['class' => 'form-control', 'placeholder' => 'Nombre usuario']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('apellido', 'Nombre') !!}
		{!! Form::text('apellido', null, 
			['class' => 'form-control', 'placeholder' => 'Apellido usuario']) !!}
	</div>

	<div class="form-group">
    	{!! Form::label('idestatus', 'Estatus') !!}
    	{!! Form::select('idestatus', $estatus,  ['class' => 'form-control']) !!}
	</div>
		
		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
	
@endsection

