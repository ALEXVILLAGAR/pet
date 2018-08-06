<?php

class Conectar
{	
 	public static function conexion()
	{
		$conexion = new mysqli("localhost","root","","PET");
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}

	public static function conexion1()
	{
		$usuario = "root";
$contrasena = ""; //contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "PET"; //nombre de la base de datos.

$conexion = mysqli_connect( $servidor, $usuario, '', $basededatos) or die ("No se ha podido conectar al servidor de Base de datos");

return $conexion;
	}

}


?>