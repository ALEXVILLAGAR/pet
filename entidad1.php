<?php 
session_start();
require_once("ControlClass.php");
$fundacion = new Fundacion();
if(!SessionesPet::session_active() || !$fundacion->is_fundacion()){
	header('Location: index.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>I want a pet</title>
<link rel="shortcut icon" href="img/icono.png" type="image/x-icon  sizes="64x64">

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
<div class="container ">

<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logo2.png" class=".img-fluid rounded float-left logo"  border=4 width=120 height=70 alt="logo"></a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
	<li class="nav-item">
		<button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="index.php">Inicio</a></button>
	</li>
	<li class="nav-item">
		<button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#about">Mi información</a></button>
	</li>
	<li class="nav-item">
		<button class="btn btn-outline-info">
			<a class="nav-link js-scroll-trigger" href="#services">Donaciones</a></button>
		</li>
		
		<li class="nav-item">
			<button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#registrar">Mis mascotas</a></button>
		</li>
		<li class="nav-item">
			<button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#contact"> Denuncias</a></button>
		</li>
		<li class="nav-item">
			<button class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
	         <a class="nav-link js-scroll-trigger" href="#">cerrar sesión</a>
			</button>
		</li>
	</ul>
</div>
</div>
</nav>


<header class="masthead text-center text-white d-flex">
<div class="container my-auto">
<div class="row">
	<div class="col-lg-10 mx-auto">
		<h1 class="text-uppercase">
			<strong>somos <?php echo $fundacion->fundacion['nombre']; ?> comprometidos con nuestras mascotas.</strong>
			<!-- Button trigger modal para probar -->
			</h1>
			<hr>
	</div>

	<div class="contenedor1"> 
		<div class="col-lg-8 mx-auto">
			<center> 
			<p class="text-faded mb-6 text-primary text-center">i want a pet en pro del bienestar de las mascotas, ven y ayudanos a darles todo el amor que merecen.</p>
			</center>
		</div>
	</div>
</div>
</div>
</header>

<section class="bg-primary" id="about">
<div class="card text-center border-success">
<div class="card-header bg-transparent border-success">
</div>
<div class="card-body">
<h5 class="card-title">Tu información.</h5>
<p class="card-text">esta información es muy importante para garantizar la comunicación con tus usurios; es por esto que solicitamos que sea veridica y actualizada.</p>
<a href="#" class="btn btn-primary">Actualizar</a>
</div>
<div class="card-footer text-muted">
</div>
</div>
</section>

<section id="services">
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="section-heading">nuestras donaciones.</h2>
			<hr class="my-4">
		</div>
	</div>
</div>
<center>
<div class="card">
<div class="card-header">
</div>
<div class="card-body">
<h5 class="card-title">Unidos somos mas.</h5>
<p class="card-text">personas de buen corazón y que aportan al bienestar de nuestras mascotas han donado para ti la suma de $$$$$$  pesos.</p>
<a href="#" class="btn btn-primary">ver detalle de donaciones.</a>
</div>
</div>
<img class="card-img-bottom" height="500" src="https://images.pastatic.com/Content/ImagesContent/2544/122060/Imagen_Tres_Guru_Donaton.jpg?w=900" alt="Card image cap">
</div>
</center>
</section>

<!-- para hacer gestion de mascotas-->
<section class="bg-dark text-white" id="registrar">
<div class="container text-center">
	<h2 class="mb-4">desde aca puedes agregar, editar o elimnar tus mascotas.</h2>
	<a class="btn btn-light btn-xl sr-button" href="#"data-toggle="modal" data-target="#modalLRForm">agregar mascotas.</a>
	<a class="btn btn-light btn-xl sr-button" href="#"data-toggle="modal" data-target="#modalLRForm">editar o eliminar mascotas.</a>
	<a class="btn btn-light btn-xl sr-button" action="mis_mascotas.php" href="mis_mascotas.php">ver mascotas.</a>
</div>
</section>


<section id="contact">
<div class="container">
	<div class="row">
		<div class="col-lg-8 mx-auto text-center">
			<h2 class="section-heading">Casos de denuncias y otros</h2>
			<hr class="my-4">
			<p class="mb-5">algunas personas han notificado al sistema de los isguientes hechos para que los atiendas..</p>
		</div>
	</div>
	<center> 
	<p>
<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Denuncia</a>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Denuciante</button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">ver todo</button>
</p>
<br>
<p>
<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Denuncia</a>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Denuciante</button>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">ver todo</button>
</p>
</center>
<div class="row">
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample1">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
</div>
<div class="col">
<div class="collapse multi-collapse" id="multiCollapseExample2">
  <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.

    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
</div>
</div>
</div>


</section>

<!-- Footer -->
<footer class="page-footer font-small mdb-color darken-3 pt-4 footer">

    <!-- Footer Elements -->
    <div class="container">

      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6">

          <!-- Video -->
          <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Xdo3L_oSikQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
    <!-- Footer Elements -->
<!-- Footer Elements -->
<center>
    <div class="container">

     

    </div>
    </center>
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 I want a pet.
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

<!-- Modal para verificar cerrar seíón-->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content border-danger">
						<div class="modal-header">
							<h5 class="modal-title text-center" id="exampleModalLabel">confirmar salida.</h5>
							
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body ">
							<p border-danger>queremos confirmar si en realidad quieres cerrar sesión en este momento. </p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">no, quiero quedarme</button>
							<a href="ruta.php?variable=cerrar_login">
							<button type="button" class="btn btn-primary">si, quiero salir</button></a>
						</div>
					</div>
				</div>
			</div>

<!--Modal: para registrar mascotas al sistema-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog cascading-modal" role="document">
	<!--Content-->
	<div class="modal-content">

		<!--Modal cascading tabs-->
		<div class="modal-c-tabs">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">

				<li class="nav-item">
					<center>
						<a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-paw mr-1"></i> registrar nueva mascota.</a>
					</li>
				</center>
			</ul>

			<!-- Tab panels -->
			<div class="tab-content">
				<!--Panel 8-->
				<div class="tab-pane fade in show active" id="panel8" role="tabpanel">

					<!--Body-->
					<div class="modal-body registrar1" >
						<form action="ruta.php?variable=agregar_pet" method="POST" enctype="multipart/form-data">

							<div class="md-form form-sm mb-5">
								<input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="nombre" placeholder="nombre" required>
							</div>

							<div class="md-form form-sm mb-5">
								<input type="text" id="modalLRInput13" class="form-control form-control-sm validate" name="raza" method="post" placeholder="raza" required> 
							</div>
							<div class="md-form form-sm mb-5">
								<input type="text" id="modalLRInput13" class="form-control form-control-sm validate" name="edad" placeholder="edad" required> 
							</div>

							<div class="md-form form-sm mb-5">
								<input type="text" id="modalLRInput13" class="form-control form-control-sm validate" name="estado" placeholder="estado ()" required> 
							</div>

							<div class="md-form form-sm mb-5">
								<input type="file" id="modalLRInput13"  name="imagen" class="form-control form-control-sm validate" required>
							</div>

							<div class="text-center form-sm mt-2">
								<button type="submit" class="btn btn-primary">registrar mascota <i class="fa fa-sign-in ml-1"></i></button>
							</div>

						</form>
						<!--Footer-->

					</div>
					<!--/.Panel 8-->
				</div>

			</div>
		</div>
		<!--/.Content-->
	</div>
</div>
<!--Modal: Login / Register Form-->

<!-- Footer -->
<footer class="page-footer font-small mdb-color darken-3 pt-4 footer">

	<!-- Footer Elements -->
	<div class="container">

		<!--Grid row-->
		<div class="row d-flex justify-content-center">

			<!--Grid column-->
			<div class="col-md-6">

				<!-- Video -->
				<div class="embed-responsive embed-responsive-16by9 mb-4">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Xdo3L_oSikQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>

			</div>
			<!--Grid column-->

		</div>
		<!--Grid row-->

	</div>
	<!-- Footer Elements -->
	<!-- Footer Elements -->
	<center>
		<div class="container">

			<!-- Grid row-->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-12 py-5">
					<div class="mb-5 flex-center">

						<!-- Facebook -->
						<a class="fb-ic">
							<i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a>
						<!-- Twitter -->
						<a class="tw-ic">
							<i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a>
						<!-- Google +-->
						<a class="gplus-ic">
							<i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a>
						<!--Linkedin -->
						<a class="li-ic">
							<i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a>
						<!--Instagram-->
						<a class="ins-ic">
							<i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a>
						<!--Pinterest-->
						<a class="pin-ic">
							<i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
						</a>
					</div>
				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row-->

		</div>
	</center>
	<!-- Footer Elements -->
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2018 Copyright:
		<a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>

</body>

</html>
