<!DOCTYPE html>
<html lang="ES">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MirrorWatch</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/miestilo.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

    <body style="background-color:#e0e0e0;">
    <!-- se llama a la navbar-->
        <?php

        include("inc/Menu.php");

        ?>
    <!-- Se agrega una imagen con efecto parallax-->
    <div class="parallax-container">
      <div class="parallax"><img class="mediana" src="img/mision.jpg"></div>
    </div>
    <div class="container">
    <header><h1>Nosotros</h1></header>
    <!-- Se crean celdas de los desarrolladores-->
      <div class="row">
      <div class="col s6">
        <div class = "container">
          <center>
        <img class="user"src = "img/Walter.jpg">
        <h5>Walter Garcia</h5>
        <p>Ceo y parte de los desarrolladores del sitio<p>
          </center>
        </div>
      </div>
      <div class="col s6">
        <div class = "container">
          <center>
        <img class="user"src = "img/Byron.jpg">
        <h5>Byron Solorzano</h5>
        <p>Ceo y parte de los desarrolladores de sitio <p>
        </center>
        </div>
      </div>
      </div>
    </div>

    <!-- Contenido de mision y vison-->
    <div class="container">
          <article>
              <header><h1>Misión y Visión</h1></header>
              <div class="divider left"></div>
  <div class="section">
    <h5>VISIÓN</h5>
    <p>Ser una empresa de ventas de relojes mas reconocida y recomendad de todo el pais, 
        que con nuestra pagina innove la forma de ventas y adquición del producto, que sea una facil y optada manera
        de comprar un reloj desde el lugar en que este.
    </p>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5>MISIÓN</h5>
    <p>Somos una empresea dedicada, capaz y de confianza, con la meta de alcanzar y satisfacer a los clientes que nos
        visitan, que de una forma comprometedora deseamos conducirnos al exito con valores, solidaridad y metas, con el fin 
        de inculcar a nuestros clientes la capacidad y facilidad que se tiene comprar en linea.
    </p>
  </div>
  </div>
    </article>   
        <!-- Se llama al Footer-->
          <?php

      include("inc/Footer.php");

      ?>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript" src="../js/inicia.js"></script>
    </body>
  </html>