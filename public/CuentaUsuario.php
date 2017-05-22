<!DOCTYPE html>
<html lang="ES">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Cuenta</title>
    <!--Import Google Icon Font-->
   
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type='text/css' rel='stylesheet' href='../css/sweetalert2.min.css'/>
    <link type='text/css' rel='stylesheet' href='../css/icons.css'/>
    <link type="text/css" rel="stylesheet" href="../css/miestilo.css"  media="screen,projection"/>

    <script type='text/javascript' src='../js/sweetalert2.min.js'></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  
  <body>

    <!--Se inclye el Nav-->
    <?php
    include("inc/menu.php");
    ?>

    <!--Empieza la informacion-->
    <div class="cuent">
            
        <ul id="tabs-swipe-demo" class="tabs black center">
          <li class="tab col s3"><a class="active" href="#test-swipe-1">Datos del Usuario</a></li>
          <li class="tab col s3"><a href="#test-swipe-2">Configuracion</a></li>
      
        </ul>
        <?php
          require("../lib/database.php");
          require("../lib/validator.php");           
	        session_start();
          $sql = "SELECT usuario,nombre,apellido,fecha_nacimiento,Telefono,correo FROM clientes_usu,datos_personales WHERE clientes_usu.id_datospersonales1 = datos_personales.id_datospersonales AND id_cliente_usu = ?";
          $param = array($_SESSION['id_cliente']);
          $data = Database::getRow($sql,$param);

          $nombres = $data['nombre'];
          $apellidos = $data['apellido'];
          $fecha_nacimiento = $data['fecha_nacimiento'];
          $telefono = $data['Telefono'];
          $correo = $data['correo'];
          $usuario = $data['usuario'];         

          if(!empty($_POST))
            {
              
              $_POST = Validator::validateForm($_POST);
              $nombres = $_POST['nombres'];
              $apellidos = $_POST['apellidos'];
              $fecha_nacimiento = $_POST['fecha_nacimiento'];
              $telefono = $_POST['Telefono'];
              $correo = $_POST['correo'];
              $usuario = $_POST['usuario'];
              $clave1 = $_POST['clave1'];
              $clave2 = $_POST['clave2']; 

              try
              {
                if($nombres != "" && $apellidos != "")
                {
                  if($fecha_nacimiento != "")
                  {
                    if($telefono != "")
                    {
                      if($correo != "")
                      {
                        if($usuario != "")
                        {
                          if($clave1 == "" && $clave2 == "")
                          {
                            //codigo de update sin clave
                            $sql2 = "UPDATE clientes_usu SET usuario = ? WHERE id_cliente_usu = ?";
                            $param2 = array($usuario,$_SESSION['id_cliente']);
                            Database::executeRow($sql2, $param2);

                            $id_datos = "SELECT id_datospersonales1 FROM clientes_usu WHERE id_cliente_usu = ?";
                            $paramID = array($_SESSION['id_cliente']);
                            $Dato = Database::getRow($id_datos, $paramID);
                            $ID = array_pop($Dato);

                            $sql1 = "UPDATE datos_personales SET nombre = ?, apellido = ?, fecha_nacimiento = ?, Telefono = ?, correo = ? WHERE id_datospersonales = ?";
                            $param1 = array($nombres, $apellidos, $fecha_nacimiento, $telefono, $correo, $ID);
                            Database::executeRow($sql1, $param1);

                            Validator::showMessage(1, "Operacion Exitosa", null);
                          }
                          else if($clave1 != "" && $clave2 != "")
                          {
                            if($clave1 == $clave2)
                            {
                              //codigo de update
                              Validator::showMessage(1, "Operacion Exitosa", null);
                            }
                            else
                            {
                              throw new Exception("Las claves no coinciden");
                            }
                          }
                        }
                        else
                        {
                          throw new Exception("Debe digitar el usuario");
                        }
                      }
                      else
                      {
                        throw new Exception("Debe digitar el correo");
                      }
                    }
                    else
                    {
                      throw new Exception("Debe digitar el telefono");
                    }
                  }
                  else
                  {
                    throw new Exception("Debe digitar la fecha de nacimiento");
                  }
                }
                else
                {
                  throw new Exception("Debe digitar el nombres y apellidos");
                }
              }
              catch(Exception $e)
              {
                Validator::showMessage(2, $e->getMessage(), null);
              }

            }
          
        ?>   
         <form class='col s12 red darken-1' id="test-swipe-1" method='get'>
            <div class='row'>

              <div class='input-field col s6'>
                <i class='material-icons prefix'>account_circle</i>
                <input disabled value='<?php print($nombres ." ". $apellidos); ?>' id='disabled' type='text' class='validate white-text'>
                <label for='icon_prefix' class='white-text'>Nombre Completo</label>
              </div>

              <div class='input-field col s6'>
                <i class='material-icons prefix'>phone</i>
                <input disabled value='<?php print($telefono); ?>' id='disabled' type='text' class='validate white-text'>
                <label for='icon_telephone' class='white-text'>Telefono</label>
              </div>

              <div class='input-field col s6'>
                <i class='material-icons prefix'>perm_identity</i>
                <input disabled value='<?php print($fecha_nacimiento); ?>' id='disabled' type='text' class='validate white-text'>
                <label for='icon_telephone' class='white-text'>Fecha de Nacimiento</label>
              </div>
              
              <div class='input-field col s6'>
                <i class='material-icons prefix'>supervisor_account</i>
                <input disabled value='<?php print($correo); ?>' id='disabled' type='text' class='validate white-text'>
                <label for='icon_telephone' class='white-text'>Correo Electronico</label>
              </div>

            </div>
          </form>

        <form method='post' id="test-swipe-2">
                  <div class='row'>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>person</i>
                      <input id='nombres' type='text' name='nombres' class='validate' value='<?php print($nombres); ?>' required/>
                      <label for='nombres'>Nombres</label>
                    </div>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>person</i>
                      <input id='apellidos' type='text' name='apellidos' class='validate' value='<?php print($apellidos); ?>' required/>
                      <label for='apellidos'>Apellidos</label>
                    </div>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>redeem</i>
                      <input id='fecha_nacimiento' type='date' name='fecha_nacimiento' class='validate' value='<?php print($fecha_nacimiento); ?>' required/>
                      <label for='fecha_nacimiento' class='active'>Fecha de Nacimiento</label>
                    </div>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>call</i>
                      <input id='Telefono' type='number' name='Telefono' class='validate' value='<?php print($telefono); ?>' required/>
                      <label for='Telefono'>Telefono</label>
                    </div>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>email</i>
                      <input id='correo' type='email' name='correo' class='validate' value='<?php print($correo); ?>' required/>
                      <label for='correo'>Correo</label>
                    </div>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>person_pin</i>
                      <input id='usuario' type='text' name='usuario' class='validate' value='<?php print($usuario); ?>' required/>
                      <label for='usuario'>Usuario</label>
                    </div>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>security</i>
                      <input id='clave1' type='password' name='clave1' class='validate'/>
                      <label for='clave1'>Contraseña</label>
                    </div>
                    <div class='input-field col s12 m6'>
                      <i class='material-icons prefix'>security</i>
                      <input id='clave2' type='password' name='clave2' class='validate'/>
                      <label for='clave2'>Confirmar contraseña</label>
                    </div>
                  </div>
                <div class='row center-align'>
                  <button type='submit' class='btn waves-effect'><i class='material-icons'>send</i></button>
                </div>
              </div>
            </form>     
    </div>    

     







    <!--Se agrega el Footer-->

    <?php
    include("inc/footer.php");
    ?>

  </body>
        <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="js/public.js"></script>
  </body>
</html>

