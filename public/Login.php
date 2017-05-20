<!DOCTYPE html>
<html lang="ES">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Login</title>
    <!--Import Google Icon Font-->

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type='text/css' rel='stylesheet' href='../css/icons.css'/>
    <link type="text/css" rel="stylesheet" href="../css/miestilo.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="pol">

     
	<!-- Formularios para acceder -->
	<div class='container' id='acceder'>
		<h4 class='center-align'>Iniciar sesion</h4>
		<ul class='tabs center-align'>
			<li class='tab'><a href='#cuenta'>Crear cuenta</a></li>
			<li class='tab'><a href='#sesion'>Iniciar Sesion</a></li>
		</ul>
		<!-- Formulario para nueva cuenta -->
		<div id='cuenta'>
			<form>
				<div class='row'>
					<div class='input-field col s12 m6'>
						<i class='material-icons prefix'>account_box</i>
						<input type='text' id='nombres' class='validate'>
						<label for='nombres'>Nombres</label>
					</div>
					<div class='input-field col s12 m6'>
						<i class='material-icons prefix'>account_box</i>
						<input type='text' id='apellidos' class='validate'>
						<label for='apellidos'>Apellidos</label>
					</div>
					<div class='input-field col s12 m6'>
						<i class='material-icons prefix'>email</i>
						<input type='email' id='correo' class='validate'>
						<label for='correo' data-error='Error' data-success='Bien'>Correo</label>
					</div>
					<div class='input-field col s12 m6'>
						<i class='material-icons prefix'>phone</i>
						<input type='text' id='telefono' class='validate'>
						<label for='telefono' data-error='Error' data-success='Bien'>Teléfono</label>
					</div>
					<div class='input-field col s12 m6'>
						<i class='material-icons prefix'>security</i>
						<input type='password' id='clave1' class='validate'>
						<label for='clave1' data-error='Error' data-success='Bien'>Contraseña</label>
					</div>
					<div class='input-field col s12 m6'>
						<i class='material-icons prefix'>security</i>
						<input type='password' id='clave2' class='validate'>
						<label for='clave2' data-error='Error' data-success='Bien'>Confirmar contraseña</label>
					</div>
				</div>
				<div class='row center-align'>
					<div class='col s12'>
						<input type='checkbox' id='terminos'>
						<label for='terminos'>Acepto <a href='#terminos'>términos y condiciones</a></label>
					</div>
					<div class='col s12'>
						<button type='submit' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
					</div>
				</div>
			</form>
		</div>
		<!-- Formulario para iniciar sesión -->
		<div id='sesion'>
			<form>
				<div class='row'>
					<div class='input-field col s12 m6 offset-m3'>
						<i class='material-icons prefix'>account_box</i>
						<input type='text' id='usuario' class='validate'>
						<label for='usuario' data-error='Error' data-success='Bien'>Usuario</label>
					</div>
					<div class='input-field col s12 m6 offset-m3'>
						<i class='material-icons prefix'>security</i>
						<input type='password' id='password' class='validate'>
						<label for='password' data-error='Error' data-success='Bien'>Contraseña</label>
					</div>
				</div>
				<div class='row center-align'>
					<button type='submit' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
				</div>
			</form>
		</div>
	</div>
-->

</body>
        <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="js/public.js"></script>
</body>
</html>