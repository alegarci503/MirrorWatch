<footer class="page-footer  grey darken-2">


            <ul id="slide-out" class="side-nav">
                <li><div class="userView">
                <div class="background">
                    <img src="img/pres.jpg">
                </div>
                <a href="#!user"><img class="circle" src="img/moto2.jpg"></a>
                <a href="#!name"><span class="white-text name">
                <?php
                session_start();
                  if(isset($_SESSION['usu']))
                    {
                    print($_SESSION['usu']);
                    } 
                ?></span></a>
                </div></li>
                <li><a href="session.php"><i class="material-icons">cloud</i>Configuracion de cuenta</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Opciones</a></li>
                <li><a class="waves-effect" href="logout.php">Cerrar Sesion</a></li>
            </ul>

          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contactanos</h5>
                <p class="grey-text text-lighten-4">Quieres hablar directamente con nostros, lo puedes hacer atravez de nuestras redes sociales</p>
                <a class="waves-effect waves-light btn" href="contactanos.php"><i class="material-icons left">textsms</i>Envianos un Mensaje</a>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/MirrorWatch-257123958026524/" target="_blanck"><img src = "img/fb.png"><br>Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/?request_context=signup" target="_blanck"><img src = "img/tw.png"><br>Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/mrr_watch/" target="_blanck"><img src = "img/insta.png"><br>Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container">
            Todos los derechos reservados © 2017 Copyright MirrorWatch
            <a data-activates="slide-out" class="button-collapse grey-text text-lighten-4 right" href="#!">Opciones de Usuario</a>        
            </div>
          </div>
        </footer>