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
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota WHERE especie = 'Perro' && disponible='1'" ) or die ( "casi");
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

	public static function only_reservada(){ //todas las mascotas reservadas
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM mascota WHERE disponible=0" ) or die ( "casi");
		return $resultado;
	}

	public function uptade_pet(){ //$_POST valores de la actualizacion ofcourse
		if(isset($_FILES['imagen'])){
			$imgContenido=Control::foto($_FILES["imagen"]["tmp_name"]);
		 }
		$insertion = mysqli_query($this->db,"UPDATE mascota SET nombre='$_POST[nombre]',especie='$_POST[especie]',raza='$_POST[raza]',edad= '$_POST[edad]', estado='$_POST[estado]',foto = '$imgContenido' WHERE id = '$_POST[id]'") or die ('errorrrr');
		header('Location: views/fundacion/gmascotas.php');
	}

	public static function agregar_mascota(){ //$_POST valores para agregar ofcourse
		$imgContenido=Control::foto($_FILES["imagen"]["tmp_name"]);
		session_start();
		$fundacion = $_SESSION['user'];
		mysqli_query(Conectar::conexion(),"INSERT INTO mascota  VALUES  ('','$_POST[nombre]','$_POST[especie]','$_POST[raza]', '$_POST[edad]', '$_POST[estado]', '$imgContenido',1, '$fundacion[id]')") or die ('errorrrr');
		header('Location: views/fundacion/userfundacion.php');
	}

	public static function reservar(){
		$insertion = mysqli_query(Conectar::conexion(),"UPDATE mascota SET  disponible='no disponible',solicitud='proceso',id_usuario='$_POST[id_usuario]' WHERE id = '$_POST[id_pet]'") or die ('errorrrr');
		header('Location: index.php');
	}

	public function eliminar_mascota(){ //$_POST valores de la actualizacion ofcourse
		$id = $this->mascota['id'];
		$insertion = mysqli_query($this->db,"DELETE FROM mascota WHERE  id='$id' ") or die ('errorrrr');
		header('Location: views/fundacion/gmascotas.php');
	}

	public function perteneceA(){
		$id=$this->mascota['id_fundacion'];
		$resultado = mysqli_query($this->db, "SELECT * FROM fundacion WHERE id='$id' ") or die ( "casi");
		return mysqli_fetch_array($resultado);
	}

}

 ?>