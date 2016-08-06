$('.show-button').click(function(event) {
	console.log("CLicked");


	event.preventDefault();
	// event.stopPropagation();
	
	//var id = this.id;
	var ruta = this.href;
	// ruta = "http://localhost:8000/admin/productos/" + id;
	console.log(ruta);

	$("#custom-modal-content").load(ruta);

	/*
	$.get(ruta, function(markup) {
		$('#ajax-modal').html(markup);
	});
	*/

	//return false;
});