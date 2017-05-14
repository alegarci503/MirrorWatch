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

      <div class="row center-elements">
        <form class="col s12 m4 offset-m4 informatic-user">
          <div>
            <img class="circle responsive-img img-user" src="img/user_img/user.png">
            <br/>
            <span>Byron Solorzano</span>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Usuario</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">contact_phone</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telefono</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix">subtitles</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Correo Electronico</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix">recent_actors</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Fecha de Cumpleaños</label>
            </div>
          
            <div class="input-field col s12">
            <a class="waves-effect waves-light btn"><i class="material-icons right">mode_edit</i>Editar</a>
            </div>
          </div>
        </form>
      </div>
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/inicia.js"></script>
  </body>
</html>