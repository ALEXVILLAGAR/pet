<?php 

class Control
{
	// public static $db = Conectar::conexion();

	function __construct()
	{
		// self::$db = Conectar::conexion();
	}

	public static function register(){
		if(Validacion::validar_registro($_POST)){
			$insertion = mysqli_query(Conectar::conexion(),"INSERT INTO usuario VALUES ('','$_POST[nombre]','$_POST[documento]','$_POST[direccion]','buena','disponible',MD5('$_POST[clave]'),'$_POST[correo]','usuario',null)") or die ('errorrrr');
			Control::login();
		}else{
			header('Location: ..\index.php?variable=registro_fail');
		}
	}

	public static function login($table='usuario'){
		Validacion::validar_email($_POST['correo']);
		if ($table=='usuario') {
			$consulta = "SELECT * FROM $table WHERE email = '$_POST[correo]' && clave = MD5('$_POST[clave]')";			
		}else{
			$consulta = "SELECT * FROM $table WHERE email = '$_POST[correo]' && clave = MD5('$_POST[clave]') && estado = 'Activo'";
		}		
		$resultado = mysqli_query(Conectar::conexion(), $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		$fila =  mysqli_fetch_array($resultado);
		
		if(MD5($_POST['clave'])==$fila['clave']){
			// session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['user'] = $fila;
			$_SESSION['start'] = time();
		    $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
		    Control::redirige($fila);
		}else{
			$variable =true;
			header('Location: index.php?variable=$variable');
		}
	}

	public static function cerrar_sesion(){
		session_start();
		unset($_SESSION["user"]); //eliminar una variable de session
		session_destroy(); //cerrar la session correctamente
		header('Location: index.php');
	}

	public static function foto($picture){
		$revisar = getimagesize($picture);//se toma tamaño de la imagen
		if($revisar !== false){  //y se verifica si tiene  tamaño para validar si se cargo o no
			$image=$picture;
			return addslashes(file_get_contents($image));
		}else{
			echo "error";
		}
	}

	public static function redirige($fila){
			if($fila['tipo']=='admi'){
			    header('Location: views\administrador\estadisticas.php');     
			}
			elseif($fila['tipo']=='usuario'){
		    	header('Location: views\usuario\user.php');
			}
			else{
		    	header('Location: views\fundacion\userfundacion.php');
			}
	}

	public static function botonesGaleria(){
		return SessionesPet::session_active() && SessionesPet::session_info()['tipo']=='usuario';
	}

}

 ?>