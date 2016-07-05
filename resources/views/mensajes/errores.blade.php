@if($errors->any())
	<hr>
    <div class="alert alert-danger">
        <p>
	        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	        <strong>Oops!</strong> Porfavor arreglar los siguientes errores:
        </p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif