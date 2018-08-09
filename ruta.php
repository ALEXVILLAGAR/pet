<?php
require_once 'ControlClass.php';

$variable = $_GET['variable'];
switch ($variable) {
    case 'login':
        $ctrl = new Control();
        $ctrl->login();
        break;
    case 'cerrar_login':
        Control::cerrar_sesion();
        break;
    case 'agregar_mascota':
        //Control::cerrar_sesion();
        break;
    case 'login_fundacion':
        $ctrl = new Control();
        $ctrl->login('fundacion');
        break;
    // case 'users':
    //     $user = new Usuario();
    //     $user->todos_usuarios();
    // break;
    // case 'login':
    //     # code...
    //     break;
    default:
        # code...
        break;
}
