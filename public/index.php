<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset='utf-8'>
	<title>CoffeeCode</title>
	<link type='text/css' rel='stylesheet' href='../css/materialize.min.css'/>
	<link type='text/css' rel='stylesheet' href='../css/icons.css'/>
	<link type='text/css' rel='stylesheet' href='../css/miestilo.css'/>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body>
	<!-- Menú del sitio público -->
	  <?php
		include("inc/menu.php");
	   ?>
	<!-- Menú lateral para dispositivos móviles -->
	<ul class='side-nav' id='mobile'>
		<li><a href='#productos'><i class='material-icons left'>view_module</i>Productos</a></li>
		<li><a href='#'><i class='material-icons left'>shopping_cart</i>Compras</a></li>
		<li><a href='#acceder'><i class='material-icons left'>person</i>Acceder</a></li>
	</ul>

	<!-- Slider con subtítulos e indicadores y con una altura de 400px -->
  <!-- Se crea un Slider-->
<div class="slider black">
  <ul class="slides">
    <li>
      <img src="img/fondo.png">
      <div class="caption center-align">
        
      </div>
    </li>
    <li>
      <img src="img/slider1.jpg"> 
      <div class="caption right-align">
        <h3>Ofrecemos calidad</h3>
        <h5 class="light grey-text text-lighten-3">Encuentra las diferentes marcas</h5>
      </div>
    </li>
    <li>
      <img src="img/slider2.jpg"> 
      <div class="caption left-align">
        <h3>Reloj inteligente</h3>
        <h5 class="light grey-text text-lighten-3">Hazlo parte en tu dia a dia.</h5>
      </div>
    </li>
    <li>
      <img src="img/slider3.jpg"> 
      <div class="caption center-align">
        <h3>Encuentra tu estilo</h3>
        <h5 class="light grey-text text-lighten-3">El que mas se adacte a tu día.</h5>
      </div>
    </li>
  </ul>
</div>
<div class="container">
  <header><h1>Marcas</h1></header>
  <!-- Se agregan celdas para logos-->
    <div class="row">
    <div class="col s4">
      <div class = "container">
        <center>
      <img class="logo"src = "img/logo1.png">
      <h5></h5>
      <p><p>
        </center>
      </div>
    </div>
    <div class="col s4">
      <div class = "container">
        <center>
      <img class="logo"src = "img/logo2.png">
      <h5></h5>
      <p><p>
      </center>
      </div>
    </div>
    <div class="col s4">
      <div class = "container">
        <center>
      <img class="logo"src = "img/logo3.png">
      <h5></h5>
      <p><p>
      </center>
      </div>
    </div>
    <div class="col s4">
      <div class = "container">
        <center>
      <img class="logo"src = "img/logo4.png">
      <h5></h5>
      <p><p>
      </center>
      </div>
    </div>
    <div class="col s4">
      <div class = "container">
        <center>
      <img class="logo"src = "img/logo5.png">
      <h5></h5>
      <p><p>
      </center>
      </div>
    </div>
    <div class="col s4">
      <div class = "container">
        <center>
      <img class="logo"src = "img/logo6.png">
      <h5></h5>
      <p><p>
      </center>
      </div>
    </div>
    </div>
</div>
	


	<!-- Importación de archivos JavaScript -->
	<script type='text/javascript' src='../js/jquery-2.1.1.min.js'></script>
	<script type='text/javascript' src='../js/materialize.min.js'></script>
	<script type='text/javascript' src='js/public.js'></script>
</body>
</html>