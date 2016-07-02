@extends('layout')

@section('content')
    <h2>Productos</h2>
    <p>
        <a href="#">Agregar un producto</a>
    </p>
    <ul class="list-group">
        @foreach($productos as $producto)
        <li class="list-group-item">
            <p>
                <strong>Categoria</strong>:
                <span class="label label-info">{{ $producto->categoria->nombre }}</span>
            </p>
            <p>
                <strong>Nombre</strong>: {{ $producto->nombre }}
            </p>
            <p>
                <strong>Marca</strong>: {{ $producto->marca->nombre }}
            </p>
            <p>{{ $producto->descripcion }}</p>


        </li>
        @endforeach
    </ul>
    {!! $productos->render() !!}
@endsection
