<?php
require_once('ControlClass.php');

$variable = $_GET['variable'];
switch ($variable) {
	case 'login':
			Control::login();
		break;
	case 'cerrar':
		Control::cerrar_sesion();
		break;
	case 'agragar_mascota':
		// Control::cerrar_sesion();
		break;
	case 'registrarme':
		Control::register();
		break;
	case 'new_contacto';
		Control::newContacto();
		break;
	// case 'users':
	// 	$user = new Usuario();
	// 	$user->todos_usuarios();
	// break;
	// case 'login':
	// 	# code...
	// 	break;
	default:
		# code...
		break;
}



?>
