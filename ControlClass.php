<?php
require_once "db/conexion.php";
require_once 'validaciones.php';
/**
 *
 */
//-------------------------------------------------------------Clase Control -----------------------------------------------------------

//// clase para manejo de la session
/**
 * 
 */
require_once('clase/ClaseSession.php');

//Funciones de registro de usuarios, login y cerrar sesion


require_once("clase/ClaseControl.php");
//-------------------------------------------------------------clase Denuncias -----------------------------------------------------------
//Consultar y crear denuncias

require_once("clase/ClaseDenuncia.php");

//-------------------------------------------------------------clase usuario -----------------------------------------------------------
//Todos los usuarios, la informacion de un usuario en especifico, calificacion de usuario, actualizacion de un usuario
 require_once("clase/ClaseUsuario.php");

//-------------------------------------------------------------Clase Mascota ---------------------------------------------------------

require_once("clase/ClaseMascota.php");

//--------------------------------Clase Fundacion ----------------------------------------
require_once("clase/ClaseFundacion.php");
 ?>
