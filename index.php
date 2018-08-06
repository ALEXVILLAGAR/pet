
<?PHP session_start(); ?>
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
	             <button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#about">Nosotros</a></button>
	            </li>
	            <li class="nav-item">
	            	<button class="btn btn-outline-info">
	              <a class="nav-link js-scroll-trigger" href="#services">Donacion</a></button>
	            </li>
	            <li class="nav-item">
	              <button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#portfolio">nuestras mascotas</a></button>
	            </li>
                <li class="nav-item">
	            	<button class="btn btn-outline-info">
	              <a class="nav-link js-scroll-trigger" href="#contacto">Contactar</a></button>
	            </li>
	            <?php
		if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)){
?>
				<li class="nav-item">
	              <button class="btn btn-outline-info"> <a class="nav-link js-scroll-trigger" href="#registrar">registrarme o ingresar </a></button>
	            </li> <?php
		}else{
		?>
		 	<li class="nav-item">
	            <button class="btn btn-outline-info" > <a class="nav-link js-scroll-trigger" href="ruta.php?variable=cerrar"> cerrar sesion</a>
	            </button>
	         </li>
<?php   
		}
?>
	          </ul>
	        </div>
	      </div>
	    </nav>


	    <header class="masthead text-center text-white d-flex">

	      <div class="container my-auto">
	      	


	        <div class="row">

	          <div class="col-lg-10 mx-auto">

	            <h1 class="text-uppercase">
	              <strong>el bienestar de nuestras mascotas es primordial.</strong>
	            </h1>
	            <hr>
	          </div>
	          <div class="contenedor1"> 
	          
	          <div class="col-lg-8 mx-auto">
	            <p class="text-faded mb-6 text-primary ">i want a pet en pro del bienestar de las mascotas, ven y ayudanos a darles todo el amor que merecen.</p>
	            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Nosotros</a>
	          </div>
	        </div>
	      </div>
	    </header>

	    <section class="bg-primary" id="about">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-8 mx-auto text-center">
	            <h2 class="section-heading text-white"> I want a pet!</h2>
	            <hr class="light my-4">
	            <p class="text-faded mb-4">descripcion que hace nuestra pagina web</p>
	            <!--<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">sigue el recorrido</a>!-->
	          </div>
	        </div>
	      </div>
	      <div id="demo" class="carousel slide" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	  	<center>
	    <div class="carousel-item active">
	      <img src="img/1.jpg" alt="Los Angeles">
	      <div class="carousel-caption">
	    <h3>Los Angeles</h3>
	    <p>We had such a great time in LA!</p>
	  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/2.jpg" alt="Chicago">
	      <div class="carousel-caption">
	    <h3>Los Angeles</h3>
	    <p>We had such a great time in LA!</p>
	  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/1.jpg" alt="New York">
	      <div class="carousel-caption">
	    <h3>Los Angeles</h3>
	    <p>We had such a great time in LA!</p>
	  </div>
	    </div>
	    </center>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>

	</div>
	<br>
	<br>
	      <div class="container-fluid p-0">
	        <div class="row no-gutters">
	          <div class="col-lg-4 col-sm-6">
	            <a class="portfolio-box" href="img/gato1.gif">
	              <img class="img-fluid" src="img/gato1.gif" alt="">
	              <div class="portfolio-box-caption">
	                <div class="portfolio-box-caption-content">
	                  <div class="project-category text-faded">
	                    nombre de la entidad
	                  </div>
	                  <div class="project-name">
	                    direccion-telefono
	                  </div>
	                </div>

	              </div>

	            </a>
	            <center> <a class="btn btn-dark btn-xl sr-button" href="entidad1.html">conoceme </a></center>
	          </div>
	          <div class="col-lg-4 col-sm-6">
	            <a class="portfolio-box" href="img/perro1.gif">
	              <img class="img-fluid" src="img/perro1.gif" alt="">
	              <div class="portfolio-box-caption">
	                <div class="portfolio-box-caption-content">
	                  <div class="project-category text-faded">
	                    Category
	                  </div>
	                  <div class="project-name">
	                    Project Name
	                  </div>
	                </div>
	              </div>
	            </a>
	          </div>
	          <div class="col-lg-4 col-sm-6">
	            <a class="portfolio-box" href="img/gato2.gif">
	              <img class="img-fluid" src="img/gato2.gif" alt="">
	              <div class="portfolio-box-caption">
	                <div class="portfolio-box-caption-content">
	                  <div class="project-category text-faded">
	                    Category
	                  </div>
	                  <div class="project-name">
	                    Project Name
	                  </div>
	                </div>
	              </div>
	            </a>
	          </div>
	        </div>
	      </div>
	    </section>

<!--sesion para las donaciones-->
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

<!--sesion para nuestras mascotas-->
	    <section class="p-0" id="portfolio">
	      <div class="container-fluid p-0">
	      	<div class="col-lg-12 text-center">
	            <h2 class="section-heading">ultimas mascotas registradas</h2>
	            <hr class="my-4">
	          </div>
	        <div class="row no-gutters popup-gallery">
	          <div class="col-lg-4 col-sm-6">
	            <a class="portfolio-box" href="img/gato1.gif">
	              <img class="img-fluid" src="img/gato1.gif" alt="">
	              <div class="portfolio-box-caption">
	                <div class="portfolio-box-caption-content">
	                  <div class="project-category text-faded">
	                    nombre
	                  </div>
	                  <div class="project-name">
	                    2 años y macho
	                  </div>
	                </div>
	              </div>
	            </a>
	          </div>
	          <div class="col-lg-4 col-sm-6">
	            <a class="portfolio-box" href="img/perro1.gif">
	              <img class="img-fluid" src="img/perro1.gif" alt="">
	              <div class="portfolio-box-caption">
	                <div class="portfolio-box-caption-content">
	                  <div class="project-category text-faded">
	                    Category
	                  </div>
	                  <div class="project-name">
	                    Project Name
	                  </div>
	                </div>
	              </div>
	            </a>
	          </div>
	          <div class="col-lg-4 col-sm-6">
	            <a class="portfolio-box" href="img/gato2.gif">
	              <img class="img-fluid" src="img/gato2.gif" alt="">
	              <div class="portfolio-box-caption">
	                <div class="portfolio-box-caption-content">
	                  <div class="project-category text-faded">
	                    Category
	                  </div>
	                  <div class="project-name">
	                    Project Name
	                  </div>
	                </div>
	              </div>
	            </a>
	          </div>
	        </div>
	      </div>
	      <div class="container text-center">
	        <h2 class="mb-4">Quieres conocer todas nuestras mascotas</h2>
	        <a class="btn btn-light btn-xl sr-button" href="galeria1.php" >mi futura mascota</a>
	      </div>  
	    </section>

<!-- Section: Contact v.3 -->
<section class="contact-section my-5" id="contacto">
<div class="col-lg-12 text-center">
	            <h2 class="section-heading">contactarnos es fácil.</h2>
	            <hr class="my-4">
	          </div>
  <!-- Form with header -->
  <div class="card registrar1">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fa fa-envelope pr-2"></i>envíanos  tus datos:</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-name" class="form-control">
                <label for="form-contact-name" class="">*nombre</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-email" class="form-control">
                <label for="form-contact-email" class="">*correo</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-phone" class="form-control">
                <label for="form-contact-phone" class="">*telefono</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-company" class="form-control">
                <label for="form-contact-company" class="">compañia</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">*cual es tu caso.</label>
                <a class="btn-floating btn-lg blue">
                  <i class="fa fa-send-o"></i>
                </a>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Informacion de contacto</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fa fa-map-marker pr-2"></i>Pereira, centro, Colombia</p>
            </li>
            <li>
              <p><i class="fa fa-phone pr-2"></i>+ 36 312 3457</p>
            </li>
            <li>
              <p><i class="fa fa-envelope pr-2"></i>iwanrpet@gmail.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fa fa-linkedin"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fa fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- fin de Section: Contacto -->	


	    <section class="bg-dark text-white" id="registrar">
	      <div class="container text-center">
	        <h2 class="mb-4">Si aun no estas registrado, registrate y disfrutas de todos nuestros servicios</h2>
	        <a class="btn btn-light btn-xl sr-button" href="#"data-toggle="modal" data-target="#modalLRForm">Registrar o ingresar</a>
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

	    <!--Modal: Login / Register Form-->
	<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog cascading-modal" role="document">
	        <!--Content-->
	        <div class="modal-content">

	            <!--Modal cascading tabs-->
	            <div class="modal-c-tabs">

	                <!-- Nav tabs -->
	                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
	                    <li class="nav-item">
	                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>ingresar</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> registrarme</a>
	                    </li>
	                </ul>

	                <!-- Tab panels -->
	                <div class="tab-content">
	                    <!--Panel 7-->
	                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

	                        <!--Body-->
	                        <div class="modal-body mb-1 registrar">
	                           <form class="login-form" action="ruta.php?variable=login" method="POST">
	  <div class="form-group">
	    <label for="exampleInputEmail1" class="text-uppercase">correo</label>
	    <input type="text" class="form-control" placeholder="example@gmail.com" id="correo" name="correo" method="POST">
	    
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1" class="text-uppercase" >contraseña</label>
	    <input type="password" class="form-control" placeholder="***********" name="clave" id="clave" method="POST">
	  </div>
	  
	  
	    <div class="form-check">
	    <label class="form-check-label">
	      <input type="checkbox" class="form-check-input">
	      <small>Remember Me</small>
	    </label>
	    <button type="submit" class="btn btn-login float-right">Entrar</button>
	  </div>
	</form>
	                        </div>
	                        <!--Footer-->
	                        <div class="modal-footer">
	                            <div class="options text-center text-md-right mt-1">
	                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
	                                <p>¿Se te olvidó tu contraseña? <a href="#" class="blue-text">recuperar</a></p>
	                            </div>
	                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">cerrar</button>
	                        </div>

	                    </div>
	                    <!--/.Panel 7-->

	                    <!--Panel 8 formulario para registrar-->

	                    <div class="tab-pane fade" id="panel8" role="tabpanel">

	                        <!--Body-->
	                        <div class="modal-body registrar1">
	                            <div class="md-form form-sm mb-5">
	                                <i class="fa fa-envelope prefix"></i>
	                                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
	                                <label data-error="wrong" data-success="right" for="modalLRInput12">correo</label>
	                            </div>

	                            <div class="md-form form-sm mb-5">
	                                <i class="fa fa-lock prefix"></i>
	                                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
	                                <label data-error="wrong" data-success="right" for="modalLRInput13">contraseña</label>
	                            </div>

	                            <div class="md-form form-sm mb-4">
	                                <i class="fa fa-lock prefix"></i>
	                                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
	                                <label data-error="wrong" data-success="right" for="modalLRInput14">comprobar contraseña</label>
	                            </div>

	                            <div class="text-center form-sm mt-2">
	                                <button class="btn btn-info">registrarme <i class="fa fa-sign-in ml-1"></i></button>
	                            </div>

	                        </div>
	                        <!--Footer-->
	                        <div class="modal-footer">
	                            <div class="options text-right">
	                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
	                            </div>
	                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
	                        </div>
	                    </div>
	                    <!--/.Panel 8-->
	                </div>

	            </div>
	        </div>
	        <!--/.Content-->
	    </div>
	</div>
	<!-- final del Modal: Login / Register -->


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
<!--fin del modal cerrar sesion-->			


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
