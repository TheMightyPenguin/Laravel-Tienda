
@while(!$productos->isEmpty())
<div class="row well">
	@foreach($productos->splice(0, 3) as $producto)
	<div class="col-md-4 well">
		{{ $producto->nombre }}
		<span class="label label-default">{{ $producto->categoria->nombre }}</span>
	</div>
	@endforeach
</div>
@endwhile

{{ $productos->render() }}