<?php
require("../lib/page.php");
Page::header("Editar Perfil");

if(!empty($_POST))
{
    $_POST = Validator::validateForm($_POST);
  	$usuario = $_POST['usuario'];
  	$clave1 = $_POST['password'];
    $telefono = $_POST['Telefono'];
    $correo = $_POST['correo'];
    $fecha_cumple = $_POST['fecha_nacimiento'];
    
    

    try 
    {
      	if($usuario != "" && $telefono != "")
        {
            if($correo != "")
            {
                if($fecha_cumple != "")
                {
                    if($clave1 != "")
                    {
                            //Actualizar la fila de la tablla admin_usu
                            $clave = password_hash($clave1, PASSWORD_DEFAULT);
                            $sql = "UPDATE admi_usu SET usuario = ?, password = ? WHERE id_admin_uso = ?";
                            $params = array($usuario, $clave, $_SESSION['id_admin_uso']);
                            Database::executeRow($sql, $params);

                            //Mandar a llamar el id_datospersonas de la tabla admin_usu para actualizar la tabla relacionada
                            $id_usu = "SELECT id_datospersonales2 FROM admi_usu WHERE id_admin_uso = ?";
                            $params_usu = array($_SESSION['id_admin_uso']);
                            $id_usu_admin = Database::getRow($id_usu,$params_usu);

                            $sql1 = "UPDATE datos_personales SET fecha_nacimiento = ?, Telefono = ?, correo = ? WHERE id_datospersonales = ?";
                            $params1 = array($fecha_cumple, $telefono, $correo, $id_usu_admin);
                            Database::executeRow($sql1, $params1);
                            Page::showMessage(1, "Operación satisfactoria", "index.php");
                    }
                    else 
                    {
                          //Actualizar la fila de la tablla admin_usu
                           
                            $sql = "UPDATE admi_usu SET usuario = ? WHERE id_admin_uso = ?";
                            $params = array($usuario, $_SESSION['id_admin_uso']);
                            Database::executeRow($sql, $params);

                            //Mandar a llamar el id_datospersonas de la tabla admin_usu para actualizar la tabla relacionada
                            $id_usu = "SELECT id_datospersonales2 FROM admi_usu WHERE id_admin_uso = ?";
                            $params_usu = array($_SESSION['id_admin_uso']);
                            $id_usu_admin = Database::getRow($id_usu,$params_usu);

                            $sql1 = "UPDATE datos_personales SET fecha_nacimiento = ?, Telefono = ?, correo = ? WHERE id_datospersonales = ?";
                            $params1 = array($fecha_cumple, $telefono, $correo, $id_usu_admin);
                            Database::executeRow($sql1, $params1);
                            Page::showMessage(1, "Operación satisfactoria", "index.php");

                    }
   
                   
                }
                else
                {
                    throw new Exception("Debe ingresar la fecha de nacimiento");
                }
            }
            else
            {
                throw new Exception("Debe ingresar un correo electrónico");
            }
        }
        else
        {
            throw new Exception("Debe ingresar el usuario y telefono");
        }
    }
    catch (Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), null);
    }
}
else
{
    $sql = "SELECT * FROM admi_usu WHERE id_admin_uso = ?";
    $params = array($_SESSION['id_admin_uso']);
    $data = Database::getRow($sql, $params);
    $usuario = $data['usuario'];
    $id_datos = $data['id_datospersonales2'];

    $sql1 = "SELECT * FROM datos_personales WHERE id_datospersonales = ?";
    $params1 = array($id_datos);
    $data1 = Database::getRow($sql1, $params1);
    $nombre = $data1['nombre'];
    $telefono = $data1['Telefono'];
    $correo = $data1['correo'];
    $fecha_cumple = $data1['fecha_nacimiento'];
}
?>

    
    <div class="row center-elements">
            <form class="col s12 m4 offset-m4 informatic-user" method='post'>
            <div>
                <img class="circle responsive-img img-user" src="../img/user_img/user.png">
                <br/>
                <span><?php print($nombre); ?></span>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="usuario" name = 'usuario' type="text" class="validate" value='<?php print($usuario); ?>' required>
                    <label for="usuario">Usuario</label>
                </div>
                 <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="password" name = 'password' type="password" class="validate">
                    <label for="password">Contraseña</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">contact_phone</i>
                    <input id="Telefono" name = 'Telefono' type="number" class="validate" value='<?php print($telefono); ?>' required>
                    <label for="Telefono">Telefono</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">subtitles</i>
                    <input id="correo" name='correo' type="text" class="validate" value='<?php print($correo); ?>' required>
                    <label for="correo">Correo Electronico</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">recent_actors</i>
                    <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" class="validate" value='<?php print($fecha_cumple); ?>' required>
                    <label for="fecha_nacimiento" class = 'active'>Fecha de Nacimiento</label>
                </div>
            
    
          
                        <div class='row center-align'>
                        <a href='../main/index.php' class='btn waves-effect grey'><i class='material-icons'>cancel</i></a>
                        <button type='submit' class='btn waves-effect blue'><i class='material-icons'>save</i></button>
            </div>
            </div>
            </form>
        </div>
        

<?php
Page::footer();
?>