<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tienda</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') 	 }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.min.css') 	 }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css')     }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            @include('admin.menu')
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"> << </a>
        	</div>

        	@include('mensajes.errores')
          @include('mensajes.informativo')

			<div class="col-md-12">
				@yield('content')
			</div>

			<!--
			<hr>
			<div class="container">
				<p>&copy; 2016 - Victor</p>
			</div>-->
		</div><!-- /#page-content-wrapper -->

    </div><!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/ajax_admin_modal.js') }}"></script>
    <script src="{{ asset('js/ajax_table.js') }}"></script>

    <!-- Menu Toggle Script -->
    <script>
    var textToggle = false;
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(this).html((textToggle = !textToggle)? '>>' : '<<');
    });
    </script>

</body>

</html>
