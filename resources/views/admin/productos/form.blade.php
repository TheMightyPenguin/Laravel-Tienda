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
			{!! Form::label('apellido', 'Apellido') !!}
			{!! Form::text('apellido', null,
				['class' => 'form-control', 'placeholder' => 'Apellido usuario']) !!}
		</div>

		<fieldset class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password',
				['class' => 'form-control', 'placeholder' => 'password', 'type' => 'password']) !!}
  	</fieldset>

		<div class="form-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null,
				['class' => 'form-control', 'placeholder' => 'Email']) !!}
			{{-- <small class="text-muted">No compartiremos tu email ;)</small> --}}
		</div>

		<div class="form-group">
			{!! Form::label('telefono', 'Telefono') !!}
			{!! Form::text('telefono', null,
				['class' => 'form-control', 'placeholder' => 'Telefono']) !!}
		</div>

		<div class="form-group">
	    	{!! Form::label('idestatus', 'Estatus') !!}
	    	{!! Form::select('idestatus', $estatus,
					null, ['class' => 'selectpicker']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('idtipousuario', 'Tipo de Usuario') !!}
			{!! Form::select('idtipousuario', $tiposUsuario,
				null, ['class' => 'selectpicker']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('idubicacion', 'Ubicacion') !!}
			{!! Form::select('idubicacion', $ubicaciones,
				null, ['class' => 'selectpicker']) !!}
		</div>

		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection
