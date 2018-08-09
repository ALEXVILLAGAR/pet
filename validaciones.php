<?php 
require_once('db/conexion.php');
/**
 * 
 */
class Validacion
{
		private $opciones =  array('options' => array('min_range' => 0,'max_range' => 10));

		public static function validar_email($email){
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header('Location: index.php?variable=email_fail');			
			}
			return true;
		}

		public static function validar_registro($campos){
			if(($campos['confirmar-contra']===$campos['clave']) && Validacion::validar_email($campos['correo'])){
				$db = Conectar::conexion();
				$result = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM usuario WHERE email='$campos[correo]'"));
				if(isset($result)){	//si la variable no esta vacia, ya existe un usuario creado con este correo
					return false;
				}
				return true;
			}
			// elseif (!filter_var($campos['documento'],FILTER_VALIDATE_INT,$this->opciones)) {
			// 		header('Location: index.php?variable=true');			
			// }
		}

		public static function validar_donacion($campos){
			if($campos['monto']>0 && filter_var($campos['monto'],FILTER_VALIDATE_INT)){
				return true;
				// $db = Conectar::conexion();
				// $result = mysqli_query($db,"SELECT * FROM fundacion WHERE id='$campos[id_fundacion]'");
				// if($result->is_empty()){
				// 	header('Location: index.php?variable=true');			
				// }
			}else{return false;}
		}
}

 ?>