<?php 

class Mascota
{
	private $db;
	public $mascota;

	function __construct($id=null)
	{
		$this->db = Conectar::conexion();
		$this->mascota = mysqli_fetch_array($this->only_pet($id));
	}

	public function only_pet($id){
		$resultado = mysqli_query($this->db, "SELECT * FROM mascota WHERE id='$id' ") or die ( "casi");
		return $resultado;
	}

	public static function all_pet(){	//todas las mascotas
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota") or die ( "casi");
		return $resultado;
	}

	public static  function all_dogs_disponibles(){ //todos las mascotas perros
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota WHERE especie = 'Perro' && disponible='1'" ) or die ( "casi");
		return $resultado;	
	}

	public static  function all_dogs(){ //todos las mascotas perros
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota WHERE especie = 'Perro'" ) or die ( "casi");
		return $resultado;	
	}

	public static  function all_cats(){ //todos las mascotas gatos
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota WHERE especie = 'Gato'" ) or die ( "casi");
		return $resultado;	
	}

	public static  function all_cats_disponibles(){ //todos las mascotas gatos disponibles
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota WHERE especie = 'Gato' && disponible='1'" ) or die ( "casi");
		return $resultado;	
	}

	public static function only_disponible(){ //solo mascotas disponibles
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota WHERE disponible=1" ) or die ( "casi");
		return $resultado;
	}

	public function uptade_pet(){ //$_POST valores de la actualizacion ofcourse
		if(isset($_FILES['imagen'])){
			$imgContenido=Control::foto($_FILES["imagen"]["tmp_name"]);
		 }
		$insertion = mysqli_query($this->db,"UPDATE mascota SET nombre='$_POST[nombre]',especie='$_POST[especie]',raza='$_POST[raza]',tamano='$_POST[tamano]',edad= '$_POST[edad]', estado='$_POST[estado]',foto = '$imgContenido' WHERE id = '$_POST[id]'") or die ('errorrrr');
		header('Location: '.$_SERVER['HTTP_REFERER'] );
		/*header('Location: views/fundacion/gmascotas.php');*/
	}

	public static function agregar_mascota(){ //$_POST valores para agregar ofcourse
		$imgContenido=Control::foto($_FILES["imagen"]["tmp_name"]);
		$fundacion = $_SESSION['user'];
		$insertion = mysqli_query(Conectar::conexion(),"INSERT INTO mascota  VALUES ('','$_POST[nombre]','$_POST[especie]','$_POST[raza]','$_POST[tamano]','$_POST[edad]','$_POST[estado]',null,'$imgContenido',1,'$fundacion[id]',null)") or die ('errorrrr');
		header('Location: '.$_SERVER['HTTP_REFERER'] );
		/*header('Location: views/fundacion/userfundacion.php');*/
	}

	public static function reservar(){
		$insertion = mysqli_query(Conectar::conexion(),"UPDATE mascota SET  disponible='no disponible',solicitud='proceso',id_usuario='$_POST[id_usuario]' WHERE id = '$_POST[id_pet]'") or die ('errorrrr');
		header('Location: '.$_SERVER['HTTP_REFERER'] );
		/*header('Location: index.php');*/
	}

	public function eliminar_mascota(){ //$_POST valores de la actualizacion ofcourse
		$id = $this->mascota['id'];
		mysqli_query($this->db,"DELETE FROM preferencia WHERE  id_msacota='$id' ") or die ('error eliminar mascota de preferencia');
		mysqli_query($this->db,"DELETE FROM mascota WHERE  id='$id' ") or die ('error al eliminar mascota');
		mysqli_query($this->db,"DELETE FROM adopcion WHERE  id_mascota='$id' ") or die ('error al eliminar adopcion');
		header('Location: views/fundacion/gmascotas.php');

	}

	public function perteneceA(){
		$id=$this->mascota['id_fundacion'];
		$resultado = mysqli_query($this->db, "SELECT * FROM fundacion WHERE id='$id' ") or die ( "casi");
		return mysqli_fetch_array($resultado);
	}

	public function MePrefiere($id_user){
		$id_pet = $this->mascota['id'];
		$resultado = mysqli_query($this->db, "SELECT * FROM preferencia WHERE id_usuario='$id_user' && id_mascota = '$id_pet'") or die ( "casi");
		$resultado = mysqli_fetch_array($resultado);
		return $resultado['id_mascota']==$id_pet;
	}

	public function denegar(){
		$id_pet = $this->mascota['id'];
		$consulta = mysqli_query($this->db, "UPDATE mascota SET disponible=1, solicitud='Denegada', id_usuario=null WHERE id='$id_pet'");
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	public function dar_en_adopcion(){
		$id_pet = $this->mascota['id'];
		$id_user = SessionesPet::session_info()['id'];
		$fecha = date("Y-m-d H:i:s");
		 mysqli_query($this->db, "UPDATE mascota SET disponible=0, solicitud='Aprobada' WHERE id='$id_pet'");
		 mysqli_query($this->db,"INSERT INTO adopcion VALUES ('','$fecha','$_POST[id_usuario]','$id_pet',null)") or die ('errorrrr');
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}
}

 ?>