<?php
require_once('ControlClass.php');

$variable = $_GET['variable'];
switch ($variable) {
	case 'login':
			Control::login();
		break;
	case 'cerrar_login':
		Control::cerrar_sesion();
		break;
	case 'agregar_pet':
			Mascota::agregar_mascota();
		break;
	case 'registrarme':
		Control::register();
		break;
	case 'new_contacto';
		Control::newContacto();
	case 'login_fundacion':
			Control::login('fundacion');
		break;
	case 'new_denuncia':
			$denuncia = new Denuncia();
		break;
	case 'donacion':
			Fundacion::donacion();
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
