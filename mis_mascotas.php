<?php 
session_start();
require_once("db/conexion.php");
require_once("ControlClass.php");
if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)){
	header('Location: index.php');
	exit;
}
	$user =new Fundacion();
	if(!$user->authorizacion('usuario')){
		echo "<h2> No tienes Nivel para acceder a esta seccion </h2>";
		exit;
	}

	
 ?>

	<!doctype html>
	<html lang="en">
	  <head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	    <title>I want a pet</title>
	    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon  sizes="64x64">

	    <link href="css/galeria.css" rel="stylesheet">
	  </head>
	   <!-- Navigation -->
		    
	  <body class="fondo">


	

<?php 

$mascota=Mascota::all_pet();
$db = Conectar::conexion();	

while ($fila=mysqli_fetch_array($mascota)){
				?>
				<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($fila['foto'])?> "/> alt="Card image cap">
  <div class="card-body">
    <p class="card-text text-dark">id= <?php echo $fila['id']?> <br> nombre= <?php echo $fila['nombre']?> <br>
edad= <?php echo $fila['edad']?> <br> dispinible= <?php echo $fila['disponible']?> 
 <br> estado= <?php echo $fila['estado']?> <br> raza= <?php echo $fila['raza']?></p>
  </div>
</div>
<?php
		}	
				?>


	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	  </body>
	</html>