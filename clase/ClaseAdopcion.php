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

	}

	public static function adoptados(){
		$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM adopcion" ) or die ( "casi");
		return $resultado;
	}

	public static function adoptasPorMy($id){
	$resultado = mysqli_query(Conectar::conexion(), "SELECT * FROM adopcion WHERE id_usuario='$id'" ) or die ( "casi");
		return $resultado;	
	}

}

 ?>