<?php 
// session_start();
require_once("..\..\ControlClass.php");
if(!(SessionesPet::session_active())){
    header('Location: index.php');
    exit;
}
$user =new Usuario();
if(!$user->authorizacion('usuario')){
    include '../../error.html';
    exit;
}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            I WANT A PET
                        </title>
                        <!-- Bootstrap core CSS -->
                        <link href="../../css/estilos.css" rel="stylesheet">
                            <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                                <!-- Custom fonts for this template -->
                                <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
                                        <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" rel="stylesheet">
                                            <!-- Plugin CSS -->
                                            <link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
                                                <link href="../../css/custom.css" rel="stylesheet">
                                                    <link href="../../css/custom-themes.css" rel="stylesheet">
                                                        <!-- Custom styles for this template -->
                                                        <link href="../../css/creative.min.css" rel="stylesheet">
                                                        </link>
                                                    </link>
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
</html>
<body>

    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a class="btn btn-sm btn-dark  arriba" id="show-sidebar">
             <i class="fas fa-bars"></i>
        </a>
        <nav class="sidebar-wrapper" id="sidebar">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">
                        I WANT A PET
                    </a>
                    <div id="close-sidebar">
                        <i class="fas fa-times">
                        </i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">

        <?php if (isset($user->usuario['foto_perfil'])): ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($user->usuario['foto_perfil'])?> " class="img-responsive img-rounded" alt="User picture"/>
        <?php else: ?>
            <img alt="User picture" class="img-responsive img-rounded" src="//placehold.it/150">
        <?php endif ?>
        
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            
                            <strong>
                              <?php echo($user->usuario['nombre']); ?>
                            </strong>
                        </span>
                        <span class="user-role">
                              <?php echo($user->usuario['tipo']); ?>
                        </span>
                        <span class="user-status">
                            <i class="fa fa-circle">
                            </i>
                            <span>
                                Online
                            </span>
                        </span>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>
                                General
                            </span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" id="mascotas">
                                <i class="fas fa-paw">
                                </i>
                                <span>
                                    Mascotas
                                </span>
                                <span class="badge badge-pill badge-danger">
                                    Nueva
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../usuario/user.php">
                                            Todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../usuario/perros.php">
                                            Perros
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../usuario/gatos.php">
                                            Gatos
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="fundaciones.php" id="fund">
                                <i class="fas fa-home">
                                </i>
                                <span>
                                    Fundaciones
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-hand-holding-usd">
                                </i>
                                <span>
                                    Donaciones
                                </span>

                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../usuario/misdonaciones.php">
                                            Mis Donaciones
                                        </a>
                                    </li>
                                    <li >
                                        <a data-target="#newDonationM" data-toggle="modal">
                                            Hacer Donación
                                        </a>


                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="">
                            <a href="Favoritos.php">
                                <i class="fas fa-heart">
                                </i>
                                <span>
                                    Mis Favoritos
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" >
                                <i class="fas fa-bullhorn">
                                </i>
                                <span>
                                    Denuncias
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../usuario/MisDenuncias.php">
                                            Mis Denuncias
                                        </a>
                                    </li>
                                    <li >
                                        <a href="#" data-toggle="modal" data-target="#MhacerDenuncia">
                                <i class="fas fa-bullhorn">
                                </i> <span>
                                    Hacer Denuncia
                                    </span>
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-archive">
                                </i>
                                <span>
                                    Mis adopciones
                                </span>

                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../usuario/adoptados.php">
                                            Adoptados
                                        </a>
                                    </li>
                                    <li >
                                        <a href="..\usuario\Estado_Adopcion.php">
                                            Procesos de adopcion
                                        </a>
                                    </li>
                              
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="..\..\index.php" >
                                <i class="fas fa-arrow-alt-circle-left">
                                </i>
                                <span>
                                    Inicio
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">

                <div class="dropdown">
                    <a aria-expanded="false" aria-haspopup="true" class="" data-toggle="dropdown" href="#" id="dropdownMenuMessage">
                        <i class="fa fa-cog">
                        </i>
                        <span class="badge-sonar">
                        </span>
                    </a>
                    <div aria-labelledby="dropdownMenuMessage" class="dropdown-menu">
                        <a class="dropdown-item" href="perfil.php">
                            Mi perfil
                        </a>

                    </div>
                </div>
                <div>
                    <a  data-toggle="modal" data-target="#Mcerrar_sesion" >
                        <i class="fa fa-power-off">
                        </i>
                    </a>
                </div>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        
        <?php include '..\modal\MhacerDenuncia.php' ?>
       <?php include '..\modal\Mmi_Calificacion.php' ?>
        <?php include '..\modal\Mcerrar_sesion.php' ?>


