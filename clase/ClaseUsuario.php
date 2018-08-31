<?php 

class Usuario
{
	private $db;
	public $usuario;


	/**
	 * Class Constructor
	 * @param    $db   
	 * @param    $usuario   
	 */
		
	function __construct()
	{
		$this->db = Conectar::conexion();
		$this->usuario = SessionesPet::session_info();
	}

	public static function todos_usuarios(){	//retorna todos los usuarios de la bd
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM usuario WHERE tipo='usuario'" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}

	public function uptade_user(){ //$_POST valores de la actualizacion 
		$id = $this->usuario['id'];
		mysqli_query($this->db,"UPDATE usuario SET nombre='$_POST[nombre]',documento='$_POST[documento]',direccion= '$_POST[direccion]', email='$_POST[correo]' WHERE id = '$id'") or die ('error');	
		$user = $this->GetUsuario($id);
		$_SESSION['user']= $user;
          header('Location: '.$_SERVER['HTTP_REFERER'] );
	}

	public function authorizacion($type){
		return $this->usuario['tipo']===$type;
	}
	
	public static function calificate($id){
		$consulta = "UPDATE usuario SET valoracion = '$_POST[nuevo_valor]' WHERE id = '$id'"; 
		mysqli_query(Conectar::conexion(),$consulta);
		header('Location: ..\entidad1.php');
	}

	public function mis_donaciones(){	//mis donaciones
		$id=$this->usuario['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM donaciones WHERE id_usuario = '$id'" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}

	public function preferencia($id_pet){ //añadir una mascota a mis favotiros
		$user_id = $this->usuario['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM preferencia WHERE id_mascota = '$id_pet'" ) or die ( "Algo ha ido mal en la consulta");
		$resultado=mysqli_fetch_array($resultado);
		if($resultado['id_usuario']!=$user_id){
			$insertion = mysqli_query($this->db,"INSERT INTO preferencia VALUES ('','$id_pet','$user_id')") or die ('error');
		}else{ //header('Location: index.php');
		echo 0; }
		// header('Location: '.$_SERVER['HTTP_REFERER'] );
		echo 1;
	}

	public function mis_favoritos(){	//favoritos de cada usuario
		$id=$this->usuario['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM preferencia WHERE id_usuario = '$id'" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}

	public static function GetUsuario($id){ //obtener un usuario segun id
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM usuario WHERE id='$id' ") or die ( "casi");
		return mysqli_fetch_array($resultado);
	}

	public function foto(){ //actualizar foto de usuario
		$image = Control::foto($_FILES["imagen"]["tmp_name"]);
		$id = $this->usuario['id'];
		$insertion = mysqli_query($this->db,"UPDATE usuario SET foto_perfil='$image' WHERE id = '$id'") or die ('errorrrr');
		$user = $this->GetUsuario($id);
		$_SESSION['user']= $user;
		header('Location: '.$_SERVER['HTTP_REFERER'] );
		
	}

	public function mis_reservadas(){ //todas las mascotas reservadas
		$user_id = $this->usuario['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM mascota WHERE solicitud='proceso' && id_usuario = '$user_id'" ) or die ( "casi");
		return $resultado;
	}

	public function cambiarPass(){
		if(MD5($_POST['password-actual'])!=$this->usuario['clave'] || $_POST['confirm-password']!=$_POST['password']){
			if($this->usuario['tipo']!='admi'){
				header('Location: views/usuario/perfil.php?error-password-actual');
			}else{
				header('Location: views/administrador/perfilAdmin.php?error-password-actual');
			}
		}else{
			$id = $this->usuario['id'];
			$insertion = mysqli_query($this->db,"UPDATE usuario SET clave=MD5('$_POST[password]') WHERE id = '$id'") or die ('errorrrr');
			Control::cerrar_sesion();
		}
	}

	public function mis_denuncias(){
		$user_id = $this->usuario['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM denuncia WHERE id_usuario = '$user_id'" ) or die ( "casi");
		return $resultado;
	}

	public function mis_adoptados(){
		$user_id = $this->usuario['id'];
		$consulta="SELECT * FROM adopcion WHERE id_usuario = '$user_id'";
		$resultado = mysqli_query($this->db, $consulta ) or die ( "casi");
		return $resultado;	

	}

	public static function eliminarUsuario(){
		$id=$_POST['id_usuario'];
		mysqli_query(Conectar::conexion(),"DELETE FROM preferencia WHERE id_usuario = '$id'") or die('error preferencia');
		mysqli_query(Conectar::conexion(),"DELETE FROM adopcion WHERE id_usuario = '$id'") or die ('error adopcion');
		mysqli_query(Conectar::conexion(),"DELETE FROM donaciones WHERE id_usuario = '$id'") or die ('error donaciones');
		mysqli_query(Conectar::conexion(),"DELETE FROM denuncia WHERE id_usuario = '$id'") or die ('error denuncia');
		mysqli_query(Conectar::conexion(),"DELETE FROM usuario WHERE id = '$id'") or die ('error al usuario');
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	public function todas_preguntas(){	//retorna todos los usuarios de la bd
		$resultado = mysqli_query($this->db, "SELECT * FROM preguntas " ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}

	public function mis_denegados()
	{
		$id = $this->usuario['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM denegado WHERE id_usuario='$id'" ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		return $resultado;
	}
}


 ?>