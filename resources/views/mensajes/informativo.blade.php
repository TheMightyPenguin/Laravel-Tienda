@if (session()->has('mensaje'))
	<hr>
    <div class="alert alert-success">
        <p>
	        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
	        <strong>{{ session()->pull('mensaje') }}</strong>
        </p>
    </div>
@endif