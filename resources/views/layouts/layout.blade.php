<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <title>SmartReady - IoT</title>



		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{asset('lib/fonts/font-awesome.min.css')}}">
		@include('src.styles')
</head>

  <body>
	 <div class="container">
	  <header>
		  <!-- header content goes in here -->
	  </header>
		@include('src.nav')

    @yield('content')

    <?php // NOSOTROS
      //include('./assets/src/we_are.php');
    ?>
    <aside>
		  <!-- aside content goes in here -->
	  </aside>
	  </div> <!-- containder -->
    <footer>
      <!-- footer content goes in here -->
    </footer>
    <!-- Bootstrap core JavaScript from LibreriesGet() ================================================== -->
			@include('src.libreries')
    <?php
			/*
      include("assets/src/libreries.php") ;
			*/
    ?>

  </body>
</html>
