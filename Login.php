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

    <body class="po">

        

        <div class="conta">
            <ul id="tabs-swipe-demo" class="tabs transparent">
                <li class="tab col s3"><a class="active" href="#test-swipe-2">Login</a></li>
                <li class="tab col s3"><a href="#test-swipe-3">Registrar Usuario</a></li>
            </ul>
            <div id="test-swipe-2" class="col s12">

                 <div class="row">
                    <form class="col s12 m6">
                    <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate white-text">
                        <label for="icon_prefix">Nombre de Usuario</label>
                        </div>
                        <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" type="password" class="validate white-text">
                        <label for="password">Contraseña</label>
                        
                        <a href="#">Olvido su contraseña?</a>
                        </div>
                    </div>
                    <a class="waves-effect waves-light btn center" href="index.php"><i class="material-icons right">account_circle</i>Entrar</a>
      
                    </form>
                </div>

            </div>
            <div id="test-swipe-3" class="col s12">
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

                     <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                        <i class="material-icons right">send</i>
                    </button>
      
                    </form>
                </div>
            </div>
            
        </div>



    </body>
          <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicia.js"></script>
    </body>
  </html>