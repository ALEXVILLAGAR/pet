<?php 

class Fundacion 
{
	public $fundacion;
	private $db;

	function __construct()
	{
		$this->db = Conectar::conexion();
		$this->fundacion = SessionesPet::session_info();
	}

	public function actualizar(){
		$insertion = mysqli_query($this->db,"UPDATE fundacion SET nombre='$_POST[nombre]',email='$_POST[email]',clave=MD5('$_POST[clave]'), certificado='$_POST[certificado]',telefono='$_POST[telefono]',direccion= '$_POST[direccion]' WHERE id = '$_SESSION[user][id]'") or die ('errorrrr');
		header('Location: ../entidad1.php');
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
			header('Location: ../index.php');
		}else{
			header('Location: ../index.php?variable=fail_donacion');
		}
	}

	public static function fundacion($id){ //retorna una fundacion
	$resultado = mysqli_query($this->db, "SELECT * FROM fundacion WHERE id='$id' ") or die ( "casi");
		return mysqli_fetch_array($resultado);
	}

	public static function new_fundacion(){
		$insertion = mysqli_query(Conectar::conexion(),"INSERT INTO fundacion VALUES ('$_POST[nombre]','$_POST[email]',MD5('$_POST[clave]'),'$_POST[certificado]','$_POST[telefono]','$_POST[direccion]')") or die ('errorrrr');
		header('Location: ../index.php');
	}

	public function Mis_donaciones(){ //retorna las donaciones que tiene una fundación
		$id = $this->fundacion['id'];
	$resultado = mysqli_query($this->db, "SELECT * FROM donaciones WHERE id_fundacion='$id' ") or die ( "casi");
		 return $resultado;
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

 ?>