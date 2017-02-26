<!DOCTYPE html>
  <html lang="ES">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cuenta</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/miestilo.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body>

      <!--Se inclye el Nav-->
      <?php
      include("inc/Menu.php");
      ?>

      <!--Empieza la informacion-->



      <div class="cuent">
              
          <ul id="tabs-swipe-demo" class="tabs black center">
            <li class="tab col s3"><a class="active" href="#test-swipe-1">Datos del Usuario</a></li>
            <li class="tab col s3"><a href="#test-swipe-2">Configuracion</a></li>
        
          </ul>
          <div id="test-swipe-1" class="col s12 red darken-1">
          
          <div class="row">
            <form class="col s12">
              <div class="row">

                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input disabled value="Byron Alberto Solorzano Fuentes" id="disabled" type="text" class="validate white-text">
                  <label for="icon_prefix" class="white-text">Nombre Completo</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input disabled value="71591631" id="disabled" type="text" class="validate white-text">
                  <label for="icon_telephone" class="white-text">Telefono</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">perm_identity</i>
                  <input disabled value="18 años" id="disabled" type="text" class="validate white-text">
                  <label for="icon_telephone" class="white-text">Edad</label>
                </div>
                
                <div class="input-field col s6">
                  <i class="material-icons prefix">supervisor_account</i>
                  <input disabled value="basfuentes25@hotmail.com" id="disabled" type="text" class="validate white-text">
                  <label for="icon_telephone" class="white-text">Correo Electronico</label>
                </div>

              </div>
            </form>
          </div>
                
          
          </div>
          <div id="test-swipe-2" class="col s12 red">
          
          <div class="row">
            <form class="col s12">
              <div class="row">

                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input placeholder="Byron Alberto Solorzano Fuentes" id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Nombre Completo</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">phone</i>
                  <input placeholder="71591631" id="icon_telephone" type="tel" class="validate">
                  <label for="icon_telephone">Telefono</label>
                </div>

                <div class="input-field col s6">
                  <i class="material-icons prefix">perm_identity</i>
                  <input placeholder="18 años" id="icon_telephone" type="tel" class="validate">
                  <label for="icon_telephone">Edad</label>
                </div>
                
                <div class="input-field col s6">
                  <i class="material-icons prefix">supervisor_account</i>
                  <input placeholder="basfuentes25@gmail.com" id="icon_telephone" type="tel" class="validate">
                  <label for="icon_telephone">Correo Electronico</label>
                </div>

                 <div class="input-field col s6">
                  <i class="material-icons prefix">vpn_key</i>
                  <input placeholder="Contraseña" id="password" type="password"  class="validate">
                  <label for="password">Contraseña</label>
                </div>

                 <div class="input-field col s6">
                  <i class="material-icons prefix">vpn_key</i>
                  <input placeholder="Repetir Contraseña" id="password" type="password"  class="validate">
                  <label for="password">Contraseña</label>
                </div>

                  
              <button class="btn waves-effect waves-light" type="submit" name="action">Guardar Cambios
                  <i class="material-icons right">send</i>
             </button>
             
              </div>


            </form>

             
          </div>


          </div>
          
      </div>    
  








      <!--Se agrega el Footer-->

      <?php
      include("inc/Footer.php");
      ?>

    </body>
          <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicia.js"></script>
    </body>
  </html>