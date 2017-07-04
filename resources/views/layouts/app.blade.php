<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Clothing store ">
    <meta name="author" content="grupo7">
    <link rel="icon" href="../../favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>WalkInCloset - @yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">

    <!--Icons -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Walk In Closet</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="#"><i class="icon-user icon-large"></i></a></li>
            <li><a href="#">Mis Ordenes</a></li>
            <li><a href="/carrito"><i class="icon-shopping-cart icon-large"><span class="badge">0</span></i></a></li>
            
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Buscar...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
     
        <div class="col-sm-3 col-md-2 sidebar">
         @section('sidebar')
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Ofertas <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Accesorios</a></li>
            <li><a href="#">Pantalones</a></li>
            <li><a href="#">Blusas</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Nueva Temporada <span class="sr-only">(current)</span></a></li>
            <li><a href="/blusas">Blusas</a></li>
            <li><a href="/pantalones">Pantalones</a></li>
            <li><a href="/accesorios">Accesorios</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">SALE<span class="sr-only">(current)</span></a></li>
            
          </ul>
        @show
        </div>
     
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('content')
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- jQuery -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
