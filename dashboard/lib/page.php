<?php
require("../../lib/database.php");
require("../../lib/validator.php");
class Page
{
	public static function header($title)
	{
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
				<title>Dashboard - $title</title>
				<link type='text/css' rel='stylesheet' href='../../css/materialize.min.css'/>
				<link type='text/css' rel='stylesheet' href='../../css/sweetalert2.min.css'/>
				<link type='text/css' rel='stylesheet' href='../../css/icons.css'/>
				<link type='text/css' rel='stylesheet' href='../css/dashboard.css'/>
				<script type='text/javascript' src='../../js/sweetalert2.min.js'></script>
				
				<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
		");
		if(isset($_SESSION['usuario']))
		{
			print("
				<header class='navbar-fixed'>
			
					<nav class='blue-grey darken-3'>
						<div class='nav-wrapper'>
							<a href='../main/' class='brand-logo'><img class='pequeña' src='../img/log.png'></a>
							<a href='#' data-activates='mobile' class='button-collapse'><i class='material-icons'>menu</i></a>
							<ul class='right hide-on-med-and-down'>
							    <li><a class='dropdown-button' href='#!' data-activates='dropdown1'>Productos<i class='material-icons left'>arrow_drop_down</i></a></li>
								<li><a class='dropdown-button' href='#!' data-activates='dropdown3'>Categorias<i class='material-icons left'>shop_two</i></a></li>
								<li><a class='dropdown-button' href='#!' data-activates='dropdown2'>Usuarios<i class='material-icons left'>group</i></a></li>
								<li><a href='../comments/index.php'>Comentarios<i class='material-icons left'>business</i></a></li>
								<li><a href='../sales/index.php' >Ventas<i class='material-icons left'>local_grocery_store</i></a></li>
								<li><a class='dropdown-button' href='#' data-activates='dropdown'><i class='material-icons left'>account_circle</i>".$_SESSION['usuario']."</a></li>
								
							</ul>
							<ul id='dropdown' class='dropdown-content'>
								<li><a href='../main/profile.php'><i class='material-icons left'>edit</i>Editar perfil</a></li>
								<li><a href='../main/logout.php'><i class='material-icons left'>clear</i>Salir</a></li>
							</ul>
						    <ul id='dropdown1' class='dropdown-content'>
								<li><a href='../products/index.php'>Productos Disponibles</a></li>
								<li><a href='../products/save.php'>Agregar Productos</a></li>
							</ul>
							<ul id='dropdown2' class='dropdown-content'>
								<li><a href='../users/index.php'>Usuarios del Sistema</a></li>
								<li><a href='../save.php'>Tipos de Usuario</a></li>
							</ul>
							<ul id='dropdown3' class='dropdown-content'>
								<li><a href='../products/type.php'>Tipo de producto</a></li>
								<li><a href='../products/brand.php'>Marcas</a></li>
							</ul>
						</div>
					</nav>
				</header>
				<ul class='side-nav' id='mobile'>
					<li><a href='../products/'><i class='material-icons'>shop</i>Productos</a></li>
					<li><a href='../categories/'><i class='material-icons'>shop_two</i>Categorías</a></li>
					<li><a href='../users/'><i class='material-icons'>group</i>Usuarios</a></li>
					<li><a class='dropdown-button' href='#' data-activates='dropdown-mobile'><i class='material-icons'>verified_user</i>".$_SESSION['usuario']."</a></li>
				</ul>
				<ul id='dropdown-mobile' class='dropdown-content'>
					<li><a href='../main/profile.php'>Editar perfil</a></li>
					<li><a href='../main/logout.php'>Salir</a></li>
				</ul>
				<main class='container'>
					<h3 class='center-align white-text'></h3>
			");
		}
		else
		{
			print("
				<header class='navbar-fixed'>
					<nav class='blue-grey darken-3'>
						<div class='nav-wrapper'>
							<a href='../main/' class='brand-logo'><img class='pequeña' src='../img/log.png'></a>
						</div>
					</nav>
				</header>
				<main class='container'>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php")
			{
				self::showMessage(3, "¡Debe iniciar sesión!", "../main/login.php");
				self::footer();
				exit;
			}
		}
	}

	public static function footer()
	{
		print("
			</main>
			<footer class='page-footer blue-grey darken-3'>
				<div class='container'>
					<div class='row'>
						<div class='col s12 m6'>
							<h5 class='white-text'>Dashboard</h5>
							<a class='white-text' href='mailto:dacasoft@outlook.com'><i class='material-icons left'>email</i>Ayuda</a>
						</div>
						<div class='col s12 m6'>
							<h5 class='white-text'>Enlaces</h5>
							<a class='white-text' href='../../public/' target='_blank'><i class='material-icons left'>store</i>Sitio público</a>
						</div>
					</div>
				</div>
				<div class='footer-copyright'>
					<div class='container'>
						<span>©".date(' Y ')."MirrorWatch, todos los derechos reservados.</span>
						<span class='white-text right'>Diseñado con <a class='red-text text-accent-1' href='http://materializecss.com/' target='_blank'><b>Materialize</b></a></span>
					</div>
				</div>
			</footer>
			<script type='text/javascript' src='../../js/jquery-2.1.1.min.js'></script>
			<script type='text/javascript' src='../../js/materialize.min.js'></script>
			<script type='text/javascript' src='../js/dashboard.js'></script>
			</body>
			</html>
		");
	}

	public static function setCombo($label, $name, $value, $query)
	{
		$data = Database::getRows($query, null);
		print("<select name='$name' required>");
		if($data != null)
		{
			if($value == null)
			{
				print("<option value='' disabled selected>Seleccione una opción</option>");
			}
			foreach($data as $row)
			{
				if(isset($_POST[$name]) == $row[0] || $value == $row[0])
				{
					print("<option value='$row[0]' selected>$row[1]</option>");
				}
				else
				{
					print("<option value='$row[0]'>$row[1]</option>");
				}
			}
		}
		else
		{
			print("<option value='' disabled selected>No hay registros</option>");
		}
		print("
			</select>
			<label>$label</label>
		");
	}

	public static function showMessage($type, $message, $url)
	{
		$text = addslashes($message);
		switch($type)
		{
			case 1:
				$title = "Éxito";
				$icon = "success";
				break;
			case 2:
				$title = "Error";
				$icon = "error";
				break;
			case 3:
				$title = "Advertencia";
				$icon = "warning";
				break;
			case 4:
				$title = "Aviso";
				$icon = "info";
		}
		if($url != null)
		{
			print("<script>swal({title: '$title', text: '$text', type: '$icon', confirmButtonText: 'Aceptar', allowOutsideClick: false, allowEscapeKey: false}).then(function(){location.href = '$url'})</script>");
		}
		else
		{
			print("<script>swal({title: '$title', text: '$text', type: '$icon', confirmButtonText: 'Aceptar', allowOutsideClick: false, allowEscapeKey: false})</script>");
		}
	}
}
?>