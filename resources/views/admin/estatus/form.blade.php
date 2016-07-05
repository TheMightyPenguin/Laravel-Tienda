@extends('admin.layout')

@section('content')
<h1>Nuevo Estatus</h1>
<hr>
	{!! Form::open(['route' => 'admin.estatus.store']) !!}
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null, 
				['class' => 'form-control', 'placeholder' => 'Nombre estatus']) !!}
		</div>

		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
@endsection