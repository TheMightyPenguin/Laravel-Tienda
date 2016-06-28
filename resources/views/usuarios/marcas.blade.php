<div class="list-group">
  <a href="#" class="list-group-item active">
    Marcas
  </a>
  @foreach($marcas as $marca)
  <a href="#" class="list-group-item">
  	{{ $marca->nombre }}
  	<span class="badge">{{ $marca->productos->count() }}</span>
  </a>
  @endforeach
</div>