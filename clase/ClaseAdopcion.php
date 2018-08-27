<?php 

/**
 * 
 */
class Adopcion
{
	
	private $db;

	function __construct()
	{
		$this->db=Conectar::conexion();
	}

	public function eliminarAdoptada($id){
		mysqli_query(Conectar::conexion(),"DELETE FROM adopcion WHERE id = '$id'") or die ('error al eliminar');
		// mysqli_query(Conectar::conexion(),"DELETE mascota WHERE id = '$id'") or die ('error al ');
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	public static function adoptados(){
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM adopcion" ) or die ( "casi");
		return $resultado;
	}

	public static function adoptadasDeFun($id){ //TODO consulta 
		$consulta="SELECT * FROM adopcion LEFT JOIN `mascota` ON `adopcion`.`id_mascota` = `mascota`.`id` WHERE `mascota`.`id_fundacion` = '$id'";
		$resultado = mysqli_query(Conectar::conexion(), $consulta) or die ( "casi");
		return $resultado;
	}

	public static function adoptasPorMy($id){
	$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM adopcion WHERE id_usuario='$id'" ) or die ( "casi");
		return $resultado;	
	}

}

 ?>