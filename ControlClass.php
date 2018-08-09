<?php 
require_once("db/conexion.php");
require_once('validaciones.php');
/**
 * 
 */
//-------------------------------------------------------------Clase Control -----------------------------------------------------------
//Funciones de registro de usuarios, login y cerrar sesion
class Control
{
	// public static $db = Conectar::conexion();

	function __construct()
	{
		// self::$db = Conectar::conexion();
	}

	public static function register(){
		if(Validacion::validar_registro($_POST)){
			$insertion = mysqli_query(Conectar::conexion(),"INSERT INTO usuario VALUES ('','$_POST[nombre]','$_POST[documento]','$_POST[direccion]','buena','disponible','$_POST[clave]','$_POST[correo]','usuario')") or die ('errorrrr');
			Control::login();
		}else{
			header('Location: index.php?variable=registro_fail');
		}
		//header('Location: index.php');
	}

	public static function login($table='usuario'){
		Validacion::validar_email($_POST[correo]);
		$consulta = "SELECT * FROM $table WHERE email = '$_POST[correo]' && clave = '$_POST[clave]'";			
		
		$resultado = mysqli_query(Conectar::conexion(), $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		$fila =  mysqli_fetch_array($resultado);
		
		// if(password_verify($_POST['clave'],$fila['clave'])){
		if($_POST['clave']===$fila['clave']){
			session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['user'] = $fila;
			$_SESSION['start'] = time();
		    $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
		    if($table==='fundacion'){
		    	header('Location: entidad1.php');
		    }
			elseif($fila['tipo']==='admi'){
			    header('Location: entidad1.php');     
			}
			elseif($fila['tipo']==='usuario'){
		    	header('Location: galeria1.php');
			} 
			else{ 
				header('Location: index.php');
				}
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

	public function newContacto(){
		var_dump($_POST);
		
	}
}

//-------------------------------------------------------------clase Denuncias -----------------------------------------------------------
//Consultar y crear denuncias

class Denuncia
{
	private $db;
	function __construct()
	{
		$this->db = Conectar::conexion();
	}

	function Denuncia(){
		$imagen='traspuesto';
		$user_id = $_SESSION['user']['id'];
		mysqli_query($this->db,"INSERT INTO denuncia VALUES ('$_POST[fecha]','$imagen','$user_id')") or die ('errorrrr');
		// header('Location: index.php');
	}

	public static function denuncias(){
		return mysqli_query(Conectar::conexion(),"SELECT * FROM denuncia") or die ('error');
	}
}

//-------------------------------------------------------------clase usuario -----------------------------------------------------------
//Todos los usuarios, la informacion de un usuario en especifico, calificacion de usuario, actualizacion de un usuario
class Usuario
{
	private $db;
	public $usuario;
	
	function __construct()
	{
		$this->db = Conectar::conexion();
		$this->usuario = SessionesPet::sesion_info();
	}

	public static function todos_usuarios(){	//retorna todos los usuarios de la bd
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM usuario" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return mysqli_fetch_array($resultado);
	}

	public function uptade_user(){ //$_POST valores de la actualizacion 
		$insertion = mysqli_query($this->db,"UPDATE usuario SET nombre='$_POST[nombre]',documento='$_POST[documento]',direccion= '$_POST[direccion]', valoracion='$_POST[valoracion]', estado='$_POST[estado]', clave='$_POST[contra]', email='$_POST[email]', tipo='$_POST[tipo]' WHERE id = '$_SESSION[user][id]'") or die ('errorrrr');
		header('Location: index.php');
	}

	public function authorizacion($type){
		return $this->usuario['tipo']===$type;
	}
	
	public static function calificate($id){
		$consulta = "UPDATE usuario SET valoracion = '$_POST[nuevo_valor]' WHERE id = '$id'"; 
		mysqli_query(Conectar::conexion(),$consulta);
		header('Location: entidad1.php');
	}

	// preferencia
	public function preferencia($id_pet){
			$insertion = mysqli_query($this->db,"INSERT INTO preferencia VALUES ('$id_pet','$this->usuario[id]')") or die ('errorrrr');
		header('Location: index.php');
	}
}

//-------------------------------------------------------------Clase Mascota ---------------------------------------------------------

class Mascota
{
	private $db;
	
	function __construct()
	{
		$this->db = Conectar::conexion();
	}

	public static function all_pet(){
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota" ) or die ( "casi");
		return $resultado;
	}

	public function uptade_pet(){ //$_POST valores de la actualizacion ofcourse
		$insertion = mysqli_query($this->db,"UPDATE mascota SET nombre='$_POST[nombre]',raza='$_POST[raza]',edad= '$_POST[edad]', estado='$_POST[estado]', disponible='$_POST[disponible]', foto='$_POST[foto]', id_fundacion='$_POST[id_fundacion]' WHERE id = '$id[id]'") or die ('errorrrr');
		header('Location: index.php');
	}

	public static function agregar_mascota(){ //$_POST valores para agregar ofcourse
		$revisar = getimagesize($_FILES["imagen"]["tmp_name"]);//se toma tamaño de la imagen
		if($revisar !== false){                    //y se verifica si tiene  tamaño para validar si se cargo o no
			$image=$_FILES['imagen']['tmp_name'];
			$imgContenido=addslashes(file_get_contents($image));
		}else{
			echo "error";
		}
		$fundacion = SessionesPet::sesion_info();	
		mysqli_query(Conectar::conexion(),"INSERT INTO mascota  VALUES  ('','$_POST[nombre]', '$_POST[raza]', '$_POST[edad]', '$_POST[estado]', '$imgContenido',1, '$fundacion[id]')") or die ('errorrrr');
		header('Location: entidad1.php');
	}

	public function cambiar_reserva(){ //$_POST valores de la actualizacion ofcourse
		$insertion = mysqli_query($this->db,"UPDATE mascota SET  disponible='$_POST[disponible]' WHERE id = '$_POST[id]'") or die ('errorrrr');
		header('Location: index.php');
	}

	public function eliminar_mascota(){ //$_POST valores de la actualizacion ofcourse
		$insertion = mysqli_query($this->db,"DELETE FROM mascota WHERE  id='$_POST[id]' ") or die ('errorrrr');
		header('Location: index.php');
	}

}

//--------------------------------Clase Fundacion ----------------------------------------
class Fundacion 
{
	public $fundacion;
	private $db;

	function __construct()
	{
		$this->db = Conectar::conexion();
		$this->fundacion = $_SESSION['user'];
	}

	public function actualizar(){
		$insertion = mysqli_query($this->db,"UPDATE fundacion SET nombre='$_POST[nombre]',email='$_POST[email]',clave='$_POST[clave]', certificado='$_POST[certificado]',telefono='$_POST[telefono]',direccion= '$_POST[direccion]' WHERE id = '$_SESSION[user][id]'") or die ('errorrrr');
		header('Location: entidad1.php');
	}

	public static function fundaciones(){ //Retorna todas las fundaciones que existen
		$db=Conectar::conexion();
		$resultado = mysqli_query($db,"SElECT * FROM fundacion" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}

	public static function donacion(){ //Crea  una donacion para una fundacion
		if(Validacion::validar_donacion()){
			$user = SessionesPet::sesion_info();
			$fecha = date("Y-m-d H:i:s");
			mysqli_query(Conectar::conexion(),"INSERT INTO donaciones VALUES ('','$_POST[monto]','$fecha','$user[id]','$_POST[id_fundacion]')") or die ('errorrrr');
			header('Location: index.php');
		}else{
			header('Location: index.php?variable=fail_donacion');
		}
	}

	public function fundacion(){ //retorna una fundacion
		return mysqli_query($this->db,"SElECT * FROM fundacion WHERE id='$this->fundacion[id]'") or die ( "Algo ha ido mal en la consulta a la base de datos");
	}

	public static function new_fundacion(){
		$insertion = mysqli_query(Conectar::conexion(),"INSERT INTO fundacion VALUES ('$_POST[nombre]','$_POST[email]','$_POST[clave]','$_POST[certificado]','$_POST[telefono]','$_POST[direccion]')") or die ('errorrrr');
		header('Location: index.php');
	}

	public function Mis_donaciones(){ //retorna las donaciones que tiene una fundación
		 return mysqli_query($this->db,"SElECT * FROM donaciones WHERE id_fundacion= '$this->fundacion[id]')") or die ('errorrrr');
	}

	public function mis_mascotas(){
		$id_fundacion = $this->fundacion['id'];
		$resultado =  mysqli_query($this->db,"SElECT * FROM mascota WHERE id_fundacion='$id_fundacion'") or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}
//para verificar niveles de seguridad de las fundaciones.
	public function authorizacion($certificado){
		return $this->fundacion['certificado']===$certificado;
	}

	public function is_fundacion(){
		return isset($this->fundacion['certificado']);
	}
}

// clase para manejo de la session
/**
 * 
 */
class SessionesPet
{
		
	public static function session_active(){
		return (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
	}

	public static function sesion_info(){
		session_start();
		return $_SESSION['user'];
	}

	public static function is_expired(){
		session_start();
		time()>$_SESSION['expire'] ? true : false;		
	}
}
 ?>