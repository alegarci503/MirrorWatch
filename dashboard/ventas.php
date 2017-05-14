<!DOCTYPE html>
<html lang="ES">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MirrorWatch</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  
  <body>
  <!-- Se llama a la navbar-->
  <?php

    include("inc/Menu.php");

  ?>

  <div class="section-private row">
      <div class="col s12">
          <div class="col s12 m6 offset-m6">
          
          <input id="search" placeholder="Buscar venta realizada"/>
        
       
          </div>
      <div>
    <div class="col s12">
        <table>
            <tr>
                <td><strong>Cliente</strong></td>
                <td><strong>Detalle Venta</strong></td>
                <td><strong>Fecha</strong></td>
                <td><strong>Cantidades Vendidas</strong></td>
                <td><strong>Total</strong></td>
            </tr>

            <tr>
                <td><strong>Nombre</strong></td>
                <td><strong>Rolex Cosmograph Daytona</strong></td>
                <td><strong>10/05/2015</strong></td>
                <td><strong>12</strong></td>
                <td><strong>$150</strong></td>
            </tr>
        </table>
         <ul class="pagination center-elements">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>

  </div>

    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/inicia.js"></script>
  </body>
</html>