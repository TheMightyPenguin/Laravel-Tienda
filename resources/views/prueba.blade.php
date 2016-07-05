@extends('layout')

@section('content')
	<div class="container">
	{!! Form::open(['method' => 'POST']) !!}
		{!! Form::label('nombre', 'Nombre:') !!}
		{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
	{!! Form::close() !!}
	</div>
@endsection
