<?php 

class Denuncia
{
	private $db;
	function __construct()
	{
		$this->db = Conectar::conexion();
		$this->Denuncia();
	}

	public function Denuncia(){		

		if($_FILES["imagen"]["size"]>0){
			$imagen = Control::foto($_FILES["imagen"]["tmp_name"]);
		}else{
			$imagen=null;
		}
		$user = SessionesPet::session_info();
		$fecha = date("Y-m-d H:i:s");
		mysqli_query($this->db,"INSERT INTO denuncia VALUES ('','$fecha',null,$imagen','$_POST[direccion]','$_POST[descripcion]','$user[id]')") or die ('errorrrr');
		header('Location: views/usuario/user.php');
	}

	public static function denuncias(){
		$consulta =  mysqli_query(Conectar::conexion(),"SELECT * FROM denuncia") or die ('error');
		return $consulta;
	}
}

 ?>