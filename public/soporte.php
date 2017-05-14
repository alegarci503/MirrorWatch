<!DOCTYPE html>
<html lang="ES">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Cuenta</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/miestilo.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  
  <body>

    <!--Se inclye el Nav-->
    <?php
    include("inc/Menu.php");
    ?>


      <div class="row cuent">

        <h4> Preguntas Mas Frecuentes</h4>

        <div class="col s6">
         <div class="collection">
            <a href="#!" class="collection-item">¿Como puedo asociar mi tarjeta?</a>
            <a href="#!" class="collection-item">¿Porque mi envio tarda tanto?</a>
            <a href="#!" class="collection-item">¿Tienen promociones diarias?</a>
            <a href="#!" class="collection-item">¿Como puedo obtener membrecia?</a>
          </div>
        </div>

        
      </div>
    








    <!--Se agrega el Footer-->

    <?php
    include("inc/Footer.php");
    ?>

  </body>
        <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/inicia.js"></script>
  </body>
</html>