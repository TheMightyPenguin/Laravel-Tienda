<div class="list-group">
  <a href="#" class="list-group-item active">
    Ubicaciones
  </a>
  @foreach($ubicaciones as $ubicacion)
  <a href="#" class="list-group-item">
  	{{ $ubicacion->nombre }}
  	<span class="badge">{{ $ubicacion->productos->count() }}</span>
  </a>
  @endforeach
</div>