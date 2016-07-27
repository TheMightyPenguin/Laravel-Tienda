@extends('admin.layout')

@section('content')

@if (isset($estatus))
	<h1>Editar Estatus</h1>
	<hr>
	{!! Form::model($estatus, ['route' => ['admin.estatus.update', $estatus], 'method' => 'patch']) !!}
@else
	<h1>Crear Estatus</h1>
	<hr>
	{!! Form::open(['route' => 'admin.estatus.store']) !!}
@endif

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null,
				['class' => 'form-control', 'placeholder' => 'Nombre estatus']) !!}
		</div>

		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection
