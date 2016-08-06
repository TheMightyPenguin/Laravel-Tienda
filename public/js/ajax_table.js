$('#search-input').keyup(function() {
	var value = $(this).val();
	$('#ajax-table-body').load("http://localhost:8000/admin/productos/buscar/" + value);
});