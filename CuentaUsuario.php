<!DOCTYPE html>
  <html lang="ES">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/miestilo.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>


    
        <div class="col s12 m6">
        <ul id="slide-out" class="side-nav fixed">
            <li><div class="userView">
            <div class="background">
                <img src="img/pres.jpg">
            </div>
            <a href="#!user"><img class="circle" src="img/moto2.jpg"></a>
            <a href="#!name"><span class="white-text name">Byron Solorzano</span></a>
            <a href="#!email"><span class="white-text email">basfuentes12@hotmai.com</span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>Cuenta</a></li>
            <li><a href="#!">Informacion</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Seguridad</a></li>
            <li><a class="waves-effect" href="#!">Configuracion de cuenta</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>


      <header>

        <?php
        include("inc/Menu.php");
        ?>

      <ul id="tabs-swipe-demo" class="tabs black">
        <li class="tab col s3"><a class="active" href="#test-swipe-1">Informacion</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">Configuracion</a></li>
      </ul>
      <div id="test-swipe-1" class="col s12 deep-orange accent-2">
              
        <div class="row">
        <div class="input-field col s12">
          <input disabled value="Byron Alberto Solorzano Fuentes" id="disabled" type="text" class="validate white-text">
          <label for="disabled" class="white-text">Nombre Completo</label>
        </div>

    
        <div class="input-field col s6">
          <input disabled value="18 años" id="disabled" type="text" class="validate white-text">
          <label for="disabled" class="white-text">Edad</label>
        </div>

   
        <div class="input-field col s6">
          <input disabled value="basfuentes12@hotmail.com" id="disabled" type="text" class="validate white-text">
          <label for="disabled" class="white-text">Correo Electronico</label>
        </div>

        <div class="input-field col s6">
          <input disabled value="Activa" id="disabled" type="text" class="validate white-text">
          <label for="disabled" class="white-text">Cuenta</label>
        </div>        
        
      </div>

      </div>
      </div>

      <div id="test-swipe-2" class="col s12  deep-orange accent-1">

      <div class="row">
                    <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate white-text">
                        <label for="first_name" class=" white-text">Nombres</label>
                        </div>
                        <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate white-text">
                        <label for="last_name" class=" white-text">Apellidos</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                        <input id="password" type="password" class="validate white-text">
                        <label for="password" class=" white-text">Contraseña</label>
                        </div>

                         <div class="input-field col s6">
                        <input id="password" type="password" class="validate white-text">
                        <label for="password" class=" white-text">Repetir Contraseña</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                        <input id="email" type="email" class="validate white-text">
                        <label for="email" class=" white-text">Email</label>
                        </div>
                    </div>

                     <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                        <i class="material-icons right">send</i>
                    </button>
      
                    </form>
                </div>

      </div>
            
      </header>
        

      

    </body>
          <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicia.js"></script>
    </body>
  </html>