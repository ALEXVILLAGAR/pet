<?php 

class Usuario
{
	private $db;
	public $usuario;
	
	function __construct()
	{
		$this->db = Conectar::conexion();
		$this->usuario = SessionesPet::session_info();
	}

	public static function todos_usuarios(){	//retorna todos los usuarios de la bd
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM usuario" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return mysqli_fetch_array($resultado);
	}

	public function uptade_user(){ //$_POST valores de la actualizacion 
		$id = $this->usuario['id'];
		$insertion = mysqli_query($this->db,"UPDATE usuario SET nombre='$_POST[nombre]',documento='$_POST[documento]',direccion= '$_POST[direccion]', email='$_POST[correo]' WHERE id = '$id'") or die ('error');
		$_SESSION['user']=$this->GetUsuario($id);
		header('Location: views/usuario/perfil.php');
	}

	public function authorizacion($type){
		return $this->usuario['tipo']===$type;
	}
	
	public static function calificate($id){
		$consulta = "UPDATE usuario SET valoracion = '$_POST[nuevo_valor]' WHERE id = '$id'"; 
		mysqli_query(Conectar::conexion(),$consulta);
		header('Location: ..\entidad1.php');
	}

	public function mis_donaciones(){
		$id=$this->usuario['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM donaciones WHERE id_usuario = '$id'" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}

	// preferencia
	public function preferencia($id_pet){
			$insertion = mysqli_query($this->db,"INSERT INTO preferencia VALUES ('$id_pet','$this->usuario[id]')") or die ('errorrrr');
		header('Location: ..\index.php');
	}

	public static function GetUsuario($id){
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM usuario WHERE id='$id' ") or die ( "casi");
		return mysqli_fetch_array($resultado);
	}

	public function foto(){
		$image = Control::foto($_FILES["imagen"]["tmp_name"]);
		$id = $this->usuario['id'];
		$insertion = mysqli_query($this->db,"UPDATE usuario SET foto_perfil='$image' WHERE id = '$id'") or die ('errorrrr');
		$_SESSION['user']=$this->GetUsuario($id);
		header('Location: views/usuario/perfil.php');
	}

}

 ?>