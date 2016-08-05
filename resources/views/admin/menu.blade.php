<ul class="sidebar-nav">
    <li class="sidebar-brand">
        <a href="{{ url('admin') }}" >
            Dashboard
        </a>
    </li>
    <li>
        <h4>{{ Auth::user()->nombre }} {{ Auth::user()->tipousuario->nombre }}</h4>
    </li>
    <li>
        <a href="#">Categorias</a>
    </li>
    <li>
        <a href="{{ route('admin.usuarios.index') }}">Usuarios</a>
    </li>
    <li>
        <a href="{{ route('admin.productos.index') }}">Productos</a>
    </li>
    <li>
        <a href="#">Categorias</a>
    </li>
    <li>
        <a href="#">Ubicaciones</a>
    </li>
    <li>
        <a href="{{ route('admin.estatus.index') }}">Estatus</a>
    </li>
    <li>
        <a href="{{ url('auth/logout') }}">Salir</a>
    </li>
</ul>
