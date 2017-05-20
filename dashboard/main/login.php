<?php
require("../lib/page.php");
Page::header("Iniciar sesión");

$sql = "SELECT * FROM admi_usu";
$data = Database::getRows($sql, null);
if($data == null)
{
    header("location: register.php");
}

if(!empty($_POST))
{
	$_POST = validator::validateForm($_POST);
  	$usuario = $_POST['usuario'];
  	$password = $_POST['password'];
	
  	try
    {
      	if($usuario != "" && $password != "")
  		{
  			$sql = "SELECT * FROM admi_usu WHERE usuario = ?";
		    $params = array($usuario);
		    $data = Database::getRow($sql, $params);
		    if($data != null)
		    {
		    	$hash = $data['password'];
		    	if(password_verify($password, $hash)) 
		    	{
			    	$_SESSION['id_admin_uso'] = $data['id_admin_uso'];
			      	$_SESSION['usuario'] = $data['usuario'];
			      	header("location: index.php");
				}
				else 
				{
					throw new Exception("La clave ingresada es incorrecta");
				}
		    }
		    else
		    {
		    	throw new Exception("El usuario ingresado no existe");
		    }
	  	}
	  	else
	  	{
	    	throw new Exception("Debe ingresar un usuario y una clave");
	  	}
    }
    catch (Exception $error)
    {
        Page::showMessage(2, $error->getMessage(), null);
    }
}
?>

<form method='post'>
	<div class='row'>
		<div class='input-field col s12 m6 offset-m3'>
			<i class='material-icons prefix'>person_pin</i>
			<input id='usuario' type='text' name='usuario' class='validate' required/>
	    	<label for='usuario'>Usuario</label>
		</div>
		<div class='input-field col s12 m6 offset-m3'>
			<i class='material-icons prefix'>security</i>
			<input id='password' type='password' name='password' class="validate" required/>
			<label for='password'>Contraseña</label>
		</div>
	</div>
	<div class='row center-align'>
		<button type='submit' class='btn waves-effect'><i class='material-icons'>send</i></button>
	</div>
</form>

<?php
Page::footer();
?>