<?PHP 
// session_start();
require_once("ControlClass.php");
 ?>
<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            I WANT A PET
                        </title>
                        <!-- Bootstrap core CSS -->
                        <link href="css/estilos.css" rel="stylesheet">
                            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                <!-- Custom fonts for this template -->
                                <link href="css/login-register.css" rel="stylesheet"/>
                                <link href="css/login-registerF.css" rel="stylesheet"/>
                                <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
                                        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
                                            <!-- Plugin CSS -->
                                            <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
                                                <!-- Custom styles for this template -->
                                                <link href="css/creative.min.css" rel="stylesheet">
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body id="page-top">
<!--------------------------------NAV------------------------------------------>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    I WANT A PET
                </a>
                <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">
                                Fundaciones aliadas
                            </a>
                        </li>
      
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services">
                                Donar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">
                                Nuestras mascotas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">
                                Contacto
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
<!--------------------------------HEADER------------------------------------------>
        <header class="masthead text-center text-white d-flex">
            <div class="overlay">
            </div>
            <video autoplay="autoplay" loop="loop" muted="muted" playsinline="playsinline">
                <source src="mp4/bg.mp4" type="video/mp4">
                </source>
            </video>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase">
                            <strong>
                                UN VERDADERO AMIGO DEJA HUELLA EN TU CORAZON
                            </strong>
                        </h1>
                        <hr>
                        </hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
<?php
              if(!(SessionesPet::session_active())){
?>
                        <button class="btn btn-primary btn-xl js-scroll-trigger" data-target="#loginModal" data-toggle="modal">
                            Quiero Adoptar
                        </button>

                        <button class="btn btn-primary btn-xl js-scroll-trigger" data-target="#loginModalF" data-toggle="modal">
                            Soy Fundación
                        </button>
    <?php
            }else {

        ?>  
            <a class="text-white btn btn-primary btn-xl js-scroll-trigger" href="ruta.php?variable=return_home">Regresar a mi perfil</a>

            <a class="text-white btn btn-primary btn-xl js-scroll-trigger" href="ruta.php?variable=cerrar_login">cerrar mi sesión</a>
        
         <?php

            }
        ?> 
                        
                    </div>
                </div>
            </div>
        </header>
<!--------------------------------GALERIA------------------------------------------>

       <section class="bg-primary mascotas-index py-2 text-xs-center p-0" id="portfolio">
        <div class="col-lg-12 text-center">
    <br>
                <h2 class="section-heading text-white">
                    Nuestras mascotas
                </h2>
                <hr class="my-6 bg-white">
                </hr>
            </div>
            <?php $consulta = Mascota::only_disponible(); 
            if (SessionesPet::session_active()) {
                $vistauser=true;
            }
             ?>
           <?php include 'views/galerias/galeria_principal.php'?>
       </section> 
<!--------------------------------FUNDACIONES-------------------------------------->
        <section class="bg-dark" id="about" >
          
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">

                <h2 class="section-heading text-white">
                    Fundaciones aliadas
                </h2>
                <hr class="my-4">
                </hr>
                <div class="carousel slide" data-ride="carousel" id="demo">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#demo">
                        </li>
                        <li data-slide-to="1" data-target="#demo">
                        </li>
                        <li data-slide-to="2" data-target="#demo">
                        </li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <center>
                            <?php foreach (Fundacion::FundacionSlide() as $key => $element): ?>
                                <?php if ($key>2) continue; ?>
                                <?php if ($key+1==1): ?>
                                    <div class="carousel-item active">
                                <?php else: ?>
                                    <div class="carousel-item">
                                <?php endif ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($element['foto_fundacion'])?>" alt="Los Angeles"/>
                                        <div class="carousel-caption">
                                            <h3>
                                                <?php echo $element['nombre'] ?>
                                            </h3>
                                            <p>
                                                <strong><?php echo "direccion: ".$element['direccion']."<br> Email: ".$element['email'] ?></strong>
                                            </p>
                                        </div>
                                    </img>
                                </div>
                            <?php endforeach ?>

                        </center>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" data-slide="prev" href="#demo">
                        <span class="carousel-control-prev-icon">
                        </span>
                    </a>
                    <a class="carousel-control-next" data-slide="next" href="#demo">
                        <span class="carousel-control-next-icon">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------DONACION----------------------------------------->
         <section id="services">
        <div class="row">
            <div class="col-lg-12 text-center py-2 text-xs-center">
                <h2 class="section-heading">
                    Como Hacer Donaciones
                </h2>
                <hr class="my-4">
                </hr>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-handshake-o text-primary mb-3 sr-icons">
                    </i>
                    <h3 class="mb-3">
                       <a href="#" data-target="#loginModal" data-toggle="modal">en Domicilios</a> 
                    </h3>

                    <p class="text-muted mb-0">
                        Our templates are updated regularly so they don't break.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-btc text-primary mb-3 sr-icons">
                    </i>
                    <h3 class="mb-3">
                        <a href="#" data-target="#loginModal" data-toggle="modal">en linea</a>
                    </h3>
                    <p class="text-muted mb-0">
                        You can use this theme as is, or you can make changes!
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-money text-primary mb-3 sr-icons">
                    </i>
                    <h3 class="mb-3">
                        <a href="#" data-target="#loginModal" data-toggle="modal">puntos de atención</a>
                    </h3>
                    <p class="text-muted mb-0">
                        We update dependencies to keep things fresh.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-whatsapp text-primary mb-3 sr-icons">
                    </i>
                    <h3 class="mb-3">
                        <a href="#" data-target="#loginModal" data-toggle="modal">contactanos</a>
                    </h3>
                    <p class="text-muted mb-0">
                        You have to make your websites with love these days!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------Perdidos --------------------------------------------------------->
<section class="bg-primary">
    <div class="container-fluid" id="perdidos">
  <h1 class="text-center mb-3">Bootstrap Multi-Card Carousel</h1>
  <div id="myCarouselP" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner carouselinnerP row w-100 mx-auto">
      <div class="carousel-item carouselitemP col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carouselitemP col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 2</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carouselitemP col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 3</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item   carouselitemP col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 4</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carouselitemP col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 5</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carouselitemP col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 6</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carouselitemP col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 7</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarouselP" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarouselP" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

   
</section>

<!--------------------------------CONTACTO----------------------------------------->
        <section class="bg-dark text-white" id="contact">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-4 mx-auto text-center">
                        <h3>
                            I WANT A PET
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae aliquid minus quas omnis nisi unde dicta aperiam quaerat aliquam ut provident culpa iure neque ducimus voluptatum veritatis dolore, earum suscipit quibusdam animi quo est quae. Nobis, cumque, error. Atque quibusdam, ipsa magnam doloremque eos tempore asperiores id omnis adipisci aut.
                        </p>
                    </div>
                    <div class="col-lg-4 ml-auto text-center">
                        <h3>
                            Desarollado por:
                        </h3>
                        <div class="author info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, quae vitae molestias omnis repellendus alias laudantium, fugiat dolore culpa nisi magnam ullam eaque ad repudiandae quis adipisci dicta possimus error autem repellat cum nesciunt odit. Illum, facilis doloremque error vel.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <h3>
                            Siguenos
                        </h3>
                        <ul class="redes">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-square fa-2x">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter-square fa-2x">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-github-square fa-2x">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube-square fa-2x">
                                    </i>
                                </a>
                            </li>
                        </ul>
                        <h3>
                            Escribenos
                        </h3>
                        <i class="fa fa-at">
                            <a href="#">
                                camilogmz95@gmail.com
                            </a>
                        </i>
                    </div>
                </div>
            </div>
        </section>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js">
        </script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js">
        </script>
        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js">
        </script>
        <script src="vendor/scrollreveal/scrollreveal.min.js">
        </script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js">
        </script>
<!-----------Scripts personalizados para esta plantilla--------------------------->
        <script src="js/pinterest_grid.js">
        </script>
        <script src="js/creative.min.js">
        </script>
        <script src="js/main.js">
        </script>
        <script src="js/login-register.js" type="text/javascript"></script>
        <?php include 'views/login/login.html'?>
    

    <script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    return patron.test(String.fromCharCode(tecla));
}

function igual(e){ 
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    valido=document.getElementById('ContraOk');
    if(document.getElementById('contra_registro').value == document.getElementById('confirm_contra').value){
        valido.innerText = "Coinciden";
    }else{
        valido.innerText = "No Coinciden";
    }
}   
</script>

    </body>
</html>
