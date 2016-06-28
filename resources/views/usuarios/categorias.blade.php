<div class="list-group">
  <a href="#" class="list-group-item active">
    Categorias
  </a>
  @foreach($categorias as $categoria)
  <a href="#" class="list-group-item">
  	{{ $categoria->nombre }} 
  	<span class="badge">{{ $categoria->productos->count() }}</span>
  </a>
  @endforeach
</div>