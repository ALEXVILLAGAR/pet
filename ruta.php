<?php
require_once 'ControlClass.php';

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
	case 'updatePet':
		$mascota = new Mascota($_POST['id']);
		$mascota->uptade_pet();
		break;
	case 'eliminar_pet':
		$mascota = new Mascota($_POST['id']);
		$mascota->eliminar_mascota();
		break;
	case 'FotoFundacion':
		$fundacion = new Fundacion();
		$fundacion->foto();
		break;
	case 'update_user':
		$user = new Usuario();
		$user->uptade_user();
		break;
	case 'FotoUser':
		$user = new Usuario();
		$user->foto();
		break;
	case 'actualizarFun':
		$fundacion = new Fundacion();
		$fundacion->actualizar();
		break;
	case 'agregarFav':
		$user = new Usuario();
		$user->preferencia();
		header('Location: views/usuario/user.php');
		break;
	case 'adoptar':
		Mascota::reservar();
		break;
	case 'return_home':
		$user = new Usuario();
		Control::redirige($user->usuario,true);
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
