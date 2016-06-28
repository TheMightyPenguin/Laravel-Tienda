@extends('layout')

@section('cuerpo')
	<div class="row">
		<div class="col-md-4 well">
			<div class="row">
				@include('usuarios.categorias')
			</div>
			<div class="row">
				@include('usuarios.marcas')
			</div>
			<div class="row">
				@include('usuarios.ubicaciones')
			</div>
		</div>
		<div class="col-md-8 well">
			@include('productos.mostrar')
		</div>
	</div>
@endsection