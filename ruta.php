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
		$user->preferencia($_POST['id_pet']);
		break;
	case 'adoptar':
		Mascota::reservar();
		break;
	case 'return_home':
		$user = new Usuario();
		Control::redirige($user->usuario);
		break;
	case 'eliminarFundacion':
		Fundacion::Eliminar();
		break;
	case 'cambiarPassFun':
		$fundacion = new Fundacion();
		$fundacion->cambiarPass();
		break;
	case 'cambiarPassUser':
		$usuario = new Usuario();
		$usuario->cambiarPass();
		break;
	case 'resolver_denuncia':
		Denuncia::resolver();
		break;
	case 'negar_adopcion':
		$mascota = new Mascota($_POST['id_mascota']);
		$mascota->denegar();
		break;
	case 'darmascota':
		$mascota = new Mascota($_POST['id_mascota']);
		$mascota->dar_en_adopcion();
		break;
	case 'registro_fundacion':
		Fundacion::new_fundacion();
		break;
	case 'aceptarFundacion':
		Fundacion::activarFund($_POST['id_fundacion']);
		break;
	case 'negarFundacion':
		Fundacion::denegar();
		break;
	case 'eliminarUsuario':
		Usuario::eliminarUsuario();
		break;
	case 'nueva_pregunta':
		$fundacion = new Fundacion();
		$fundacion->nueva_pregunta();
		break;
	default:
		# code...
		break;
}
