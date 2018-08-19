<?php 

class Mascota
{
	private $db;
	
	function __construct()
	{
		$this->db = Conectar::conexion();
	}

	public function all_pet(){
		$resultado = mysqli_query($this->db, "SELECT * FROM mascota" ) or die ( "casi");
		return $resultado;
	}

	public function all_dogs(){
		$resultado = mysqli_query($this->db, "SELECT * FROM mascota WHERE especie = 'Perro" ) or die ( "casi");
		return $resultado;	
	}

	public function all_cats(){
		$resultado = mysqli_query($this->db, "SELECT * FROM mascota WHERE especie = 'Gato" ) or die ( "casi");
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

	public function cambiar_reserva(){ //$_POST valores de la actualizacion ofcourse
		$insertion = mysqli_query($this->db,"UPDATE mascota SET  disponible='$_POST[disponible]' WHERE id = '$_POST[id]'") or die ('errorrrr');
		header('Location: ../index.php');
	}

	public function eliminar_mascota(){ //$_POST valores de la actualizacion ofcourse
		$insertion = mysqli_query($this->db,"DELETE FROM mascota WHERE  id='$_POST[id]' ") or die ('errorrrr');
		header('Location: views/fundacion/gmascotas.php');
	}

	public function perteneA($id){
		$resultado = mysqli_query($this->db, "SELECT * FROM fundacion WHERE id='$id' ") or die ( "casi");
		return mysqli_fetch_array($resultado);
	}

}

 ?>