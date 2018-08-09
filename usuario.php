<?php
session_start();
require_once "ControlClass.php";
if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
    header('Location: index.php');
    exit;
}
$user = new Usuario();
if (!$user->authorizacion('usuario')) {
    echo "<h2> No tienes Nivel para acceder a esta seccion </h2>";
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
							<button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#about">Adoptar</a></button>
						</li>
						<li class="nav-item">
							<button class="btn btn-outline-info">
							<a class="nav-link js-scroll-trigger" href="#services">Donar</a></button>
						</li>

						<li class="nav-item">
							<button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#registrar">Hacer denuncia</a></button>
						</li>

						<li class="nav-item">
							<button class="btn btn-outline-info" data-toggle="modal" data-target="#cerrar">
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
						<strong> (nombre dl usuario) ayudanos con el bienestar nuestras mascotas.</strong>
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
					<h5 class="card-title">Mi futura mascota.</h5>
					<p class="card-text">El bienestar de nuestras mascotas es primordial, si para ti también es así; te invitamos a que le des ese amor a una de ellas.</p>
					<a href="galeria1.php" class="btn btn-primary">Ver mascotas</a>
				</div>
				<div class="card-footer text-muted">
				</div>
			</div>
		</section>
		<!--sesion para hacer las donaciones a las fundaciones-->
		<section id="services">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="section-heading">como hacer donaciones</h2>
						<hr class="my-4">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-4x fa-handshake-o  text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3"> <a data-toggle="modal" data-target="#exampleModal" href="#exampleModal"> en domicilio </a></h3>
							<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-4x fa-btc text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3"> <a data-toggle="modal" data-target="#exampleModal" href="#exampleModal">en linea </a></h3>
							<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-4x fa-money text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3"><a data-toggle="modal" data-target="#exampleModal" href="#exampleModal" >puntos de atencion </a></h3>
							<p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 text-center">
						<div class="service-box mt-5 mx-auto">
							<i class="fa fa-4x fa-whatsapp text-primary mb-3 sr-icons"></i>
							<h3 class="mb-3"><a data-toggle="modal" data-target="#exampleModal" href="#exampleModal">contactanos</a></h3>
							<p class="text-muted mb-0">You have to make your websites with love these days!</p>
						</div>
					</div>
				</div>
				<br> <br>
				<img class="card-img-bottom" height="500" src="https://images.pastatic.com/Content/ImagesContent/2544/122060/Imagen_Tres_Guru_Donaton.jpg?w=900" alt="Card image cap">
			</div>
		</section>
		<!--sesion para las denuncias-->
		<section id="registrar">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h2 class="section-heading">casos de denuncias y otros</h2>
						<hr class="my-4">
						<p class="mb-5">contactanos de una manera facil y segura, desde cualquier lugar y
						momento, por el bienestar de nuestras mascotas.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 ml-auto text-center">
						<i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
						<p>356 13 46</p>
					</div>
					<div class="col-lg-4 mr-auto text-center">
						<i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
						<p>
							<a href="https://www.google.com/intl/es-419/gmail/about/" target="_blank">prisma@contodo.com</a>
						</p>
					</div>
					<div class="col-lg-4 mr-auto text-center">
						<i class="fa fa-facebook fa-3x mb-3 sr-contact"></i>
						<p>
							<a href="https://www.facebook.com/" target="_blank">prisma@contodo.com</a>
						</p>
					</div>
					<div class="col-lg-4 mr-auto text-center">
						<i class="fa fa-instagram fa-3x mb-3 sr-contact"></i>
						<p>
							<a href="https://www.instagram.com" target="_blank">prisma@contodo.com</a>
						</p>
					</div>
					<div class="col-lg-4 mr-auto text-center">
						<i class="fa fa-twitter fa-3x mb-3 sr-contact"></i>
						<p>
							<a href="https://twitter.com/?lang=es" target="_blank">prisma@contodo.com</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<!--modal para hacer las donaciones-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">nueva donación</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="col-form-label">cantidad en pesos:</label>
								<select name="OS">
									<option value="0">0</option>
									<option value="1">1000</option>
									<option value="2">2000</option>
									<option value="3">3000</option>
									<option value="10">4000</option>
									<option value="11">5000</option>
									<option value="12">6000</option>
								</select>
							</div>
							<div class="form-group">
								<label for="message-text" class="col-form-label">para cual fundacion?:</label>
								<select name="OS">
									<option value="0"> </option>
									<option value="1">entidad1</option>
									<option value="2">entidad2</option>
									<option value="3">entidad3</option>
									<option value="10">entidad4</option>
									<option value="11">entidad5</option>
									<option value="12">entidad6</option>
								</select>

							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">cancelar donación</button>
						<button type="button" class="btn btn-success">realizar donación</button>
					</div>
				</div>
			</div>
		</div>
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
						<button type="button" class="btn btn-primary"><a href="ruta.php?variable=cerrar">si, quiero salir</a></button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal para verificar cerrar seíón-->
		<div class="modal fade" id="cerrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<button type="button" class="btn btn-primary" href="ruta.php?variable=cerrar">si, quiero salir</button>
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
									<form action="agregarpet.php" method="POST" enctype="multipart/form-data" action="agregarpet.php">
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
