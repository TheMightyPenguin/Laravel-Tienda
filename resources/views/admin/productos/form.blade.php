@extends('admin.layout')

@section('content')

@if (isset($producto))
	<h1>Editar producto</h1>
	<hr>
	{!! Form::model($producto, 
		['route' => ['admin.productos.update', $producto], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
@else
	<h1>Crear producto</h1>
	<hr>
	{!! Form::open(['route' => 'admin.productos.store', 'class' => 'form-horizontal']) !!}
@endif

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null,
				['class' => 'form-control', 'placeholder' => 'Nombre producto']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('cantidad', 'Cantidad') !!}
			{!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Cantidad']) !!}
		</div>

		<fieldset class="form-group">
			{!! Form::label('precio', 'Precio') !!}
			{!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' => 'Precio']) !!}
  		</fieldset>

		<div class="form-group">
			{!! Form::label('descripcion', 'Email') !!}
			{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion']) !!}
		</div>

		<div class="form-group">
	    	{!! Form::label('idestatus', 'Estatus') !!}
	    	{!! Form::select('idestatus', $estatus, null, ['class' => 'selectpicker']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('idusuario', 'Usuario') !!}
			{!! Form::select('idusuario', $usuarios, null, ['class' => 'selectpicker']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('idcategoria', 'Categoria') !!}
			{!! Form::select('idcategoria', $categorias, null, ['class' => 'selectpicker']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('idmarca', 'Marca') !!}
			{!! Form::select('idmarca', $marcas, null, ['class' => 'selectpicker']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('idtipoproducto', 'Tipo Producto') !!}
			{!! Form::select('idtipoproducto', $tiposProducto, null, ['class' => 'selectpicker']) !!}
		</div>

		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

@endsection
