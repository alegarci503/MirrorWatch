<!DOCTYPE html>
<html lang="ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Login</title>
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

<body class="po">

<!--Registro de Usuario-->
<?php
require("../lib/database.php");
require("../lib/validator.php");

$estado = "false";


if($estado == 'true')
{
	
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
									$sql1 = "INSERT INTO clientes_usu(usuario,password,id_datospersonales1) VALUES(?,?,?)";
									$params2 = array($usuario,$clave, $dato);
									Database::executeRow($sql1,$params2);
									
									Validator::showMessage(1, "Operación satisfactoria", null);
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
				Validator::showMessage(2, $error->getMessage(), null);
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
	

		}

}
else
{

		if(!empty($_POST))
		{
			$_POST = validator::validateForm($_POST);
			$usuario = $_POST['user'];
			$password = $_POST['pass'];
			
			try
			{
				if($usuario != "" && $password != "")
				{
					$sqlLogin = "SELECT * FROM clientes_usu WHERE usuario = ?";
					$paramsLogin = array($usuario);
					$dataLogin = Database::getRow($sqlLogin, $paramsLogin);
					
					if($dataLogin != null)
					{
						$hash = $dataLogin['password'];
						if(password_verify($password, $hash)) 
						{
							$_SESSION['id_cliente'] = $dataLogin['id_cliente_usu'];
							$_SESSION['usu'] = $dataLogin['usuario'];	
							Validator::showMessage(1, "Bienvenido " . $_SESSION['usu'] , null);		
							header("location: session.php");
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
				Validator::showMessage(2, $error->getMessage(), null);
			}
		}
}

?>  

<!--Login-->


	<!-- Formularios para acceder -->
	<div class='container section-public' id='acceder'>
		<h4 class='center-align'>Acceso a Cuenta</h4>
		<ul class='tabs center-align'>
			<li class='tab'><a href='#sesion'>Iniciar Sesion</a></li>
			<li class='tab'><a href='#cuenta'>Crear cuenta</a></li>
		</ul>
		<!-- Formulario para nueva cuenta -->
		<div id='cuenta'>
			<form method='post'>
			<div class='row'>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>person</i>
					<input id='nombres' type='text' name='nombres' class='validate' required/>
					<label for='nombres'>Nombres</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>person</i>
					<input id='apellidos' type='text' name='apellidos' class='validate' required/>
					<label for='apellidos'>Apellidos</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>redeem</i>
					<input id='fecha_nacimiento' type='date' name='fecha_nacimiento' class='validate' required/>
			
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>call</i>
					<input id='Telefono' type='number' name='Telefono' class='validate' required/>
					<label for='Telefono'>Telefono</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>email</i>
					<input id='correo' type='email' name='correo' class='validate' required/>
					<label for='correo'>Correo</label>
				</div>
				<div class='input-field col s12 m6'>
					<i class='material-icons prefix'>person_pin</i>
					<input id='usuario' type='text' name='usuario' class='validate' required/>
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
			</div>
				<div class='row center-align'>
						<div class='col s12'>
						<input type='checkbox' id='terminos'>
						<label for='terminos'>Acepto <a href='#terminos'>términos y condiciones</a></label>
						</div>
				</div>
			<div class='row center-align'>
				<button type='submit' class='btn waves-effect'><i class='material-icons'>send</i></button>
			</div>
		</form>
		<!--Terminos y condiciones-->
	</div>
		<div id='terminos' class='modal'>
		<div class='modal-content'>
			<h4 class='center-align'>TÉRMINOS Y CONDICIONES</h4>
			<p>Nuestra empresa ofrece los mejores productos a nivel nacional con una calidad garantizada y...</p>
		</div>
		<div class='divider'></div>
		<div class='modal-footer'>
			<a href='#!' class='modal-action modal-close btn waves-effect'><i class='material-icons'>done</i></a>
		</div>
	</div>
			<!-- Formulario para iniciar sesión -->
		<div id='sesion'>
				<form method='post'>
					<div class='row'>
						<div class='input-field col s12 m6 offset-m3'>
							<i class='material-icons prefix'>account_box</i>
							<input id='user' type='text' name='user' class='validate' required>
							<label for='user'>Usuario</label>
						</div>
						<div class='input-field col s12 m6 offset-m3'>
							<i class='material-icons prefix'>security</i>
							<input id='pass' type='password' name='pass' class='validate' required>
							<label for='pass'>Contraseña</label>
						</div>
					</div>
					<div class='row center-align'>
						<button type='submit' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
					</div>
				</form>
			</div>	
	</div>

	<div class='row center-align'>
     <a href="index.php">Ir a Sitio Publico</a>             
    </div>

</body>
        <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
	
    <script type="text/javascript" src="js/public.js"></script>
</body>
</html>