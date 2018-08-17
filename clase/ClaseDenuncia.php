<?php 

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

 ?>