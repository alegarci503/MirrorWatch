<?php
require("../lib/page.php");
Page::header("Registrar primer usuario");

$sql = "SELECT * FROM admi_usu";
$data = Database::getRows($sql, null);
if($data != null)
{
    header("location: login.php");
}

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
    $tipo_usuario = $_POST['tipo_usuario'];
    
    try 
    {
      	if($nombres != "" && $apellidos != "" && $fecha_nacimiento != "" && $telefono != "" )
        {
            if($correo != "")
            {
                if($usuario != "")
                {
                    if($clave1 != "" && $clave2 != "")
                    {
                        if($clave1 == $clave2)
                        {
                            
                            $sql = "INSERT INTO datos_personales(nombre, apellido, fecha_nacimiento, Telefono, correo) VALUES(?, ?, ?, ?, ?)";
                            $params = array($nombres, $apellidos, $fecha_nacimiento, $telefono, $correo);
                            Database::executeRow($sql, $params);

                             $sqlLast = "SELECT MAX(id_datospersonales) FROM datos_personales";
                             $dataID =  Database::getRow($sqlLast, null);
                             $dato = array_pop($dataID);
                          
                            $clave = password_hash($clave1, PASSWORD_DEFAULT);
                            $sql1 = "INSERT INTO admi_usu(usuario,password,id_tipo_usuario2,id_datospersonales2) VALUES(?,?,?,?)";
                            $params2 = array($usuario,$clave, $tipo_usuario, $dato);
                            Database::executeRow($sql1,$params2);

                            Page::showMessage(1, "Operación satisfactoria", "login.php");
                        }
                        else
                        {
                            throw new Exception("Las contraseñas no coinciden");
                        }
                    }
                    else
                    {
                        throw new Exception("Debe ingresar ambas contraseñas");
                    }
                }
                else
                {
                    throw new Exception("Debe ingresar un usuario");
                }
            }
            else
            {
                throw new Exception("Debe ingresar un correo electrónico");
            }
        }
        else
        {
            throw new Exception("Debe ingresar el nombre completo");
        }
    }
    catch (Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), null);
    }
}
else
{
    $nombres = null;
    $apellidos = null;
    $fecha_nacimiento = null;
    $telefono = null;
    $correo = null;
    $usuario = null;
    $tipo_usuario = null;

}
?>

<form method='post'>
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
            <i class='material-icons prefix'>person</i>
            <input id='fecha_nacimiento' type='date' name='fecha_nacimiento' class='validate' value='<?php print($fecha_nacimiento); ?>' required/>
       
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
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
            <input id='clave1' type='password' name='clave1' class='validate' required/>
            <label for='clave1'>Contraseña</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave2' type='password' name='clave2' class='validate' required/>
            <label for='clave2'>Confirmar contraseña</label>
        </div>
        <div class='input-field col s12 m6 offset-m3'>
            <?php
            $sql = "SELECT id_tipo_usuario, nombre_tipo FROM tipo_usu";
            $datoCombo = Page::setCombo("Tipo Usuario", "tipo_usuario", $tipo_usuario, $sql);
          
            ?>
        </div>
    </div>
    <div class='row center-align'>
 	    <button type='submit' class='btn waves-effect'><i class='material-icons'>send</i></button>
    </div>
</form>

 
        
        
<?php
Page::footer();
?>