<!DOCTYPE html>
  <html lang="ES">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MirrorWatch</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/miestilo.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
   
   <?php

      include("inc/Menu.php");

      ?>

    <body style="background-color:#e0e0e0;">
<div class="slider black">
    <ul class="slides">
      <li>
        <img src="img/fondo.png"> <!-- random image -->
        <div class="caption center-align">
          
        </div>
      </li>
      <li>
        <img src="img/slider1.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Ofrecemos calidad</h3>
          <h5 class="light grey-text text-lighten-3">Encuentra las diferentes marcas</h5>
        </div>
      </li>
      <li>
        <img src="img/slider2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Reloj inteligente</h3>
          <h5 class="light grey-text text-lighten-3">Hazlo parte en tu dia a dia.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider3.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Encuentra tu estilo</h3>
          <h5 class="light grey-text text-lighten-3">El que mas se adacte a tu día.</h5>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <header><h1>Marcas</h1></header>
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

         <?php

      include("inc/Footer.php");

      ?>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicia.js"></script>
    </body>
  </html>