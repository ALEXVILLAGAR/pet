<?php
require_once 'db/conexion.php';
/**
 *
 */
class Validacion
{
    private $opciones = array('options' => array('min_range' => 0, 'max_range' => 10));


		public static function validar_email($email){
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				// header('Location: ..\index.php?variable=email_fail');			
				return false;
			}
			return true;
		}

		public static function validar_registro($campos){
			if(($campos['confirmar-contra']==$campos['clave']) && Validacion::validar_email($campos['correo'])){
				$db = Conectar::conexion();
				$result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM usuario WHERE email='$campos[correo]'"));
				if(isset($result)){	//si la variable no esta vacia, ya existe un usuario creado con este correo
					return false;
				}
				return true;
			}
		}		

}
