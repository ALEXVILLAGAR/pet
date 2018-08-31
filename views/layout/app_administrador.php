<?php
// session_start();
require_once "..\..\ControlClass.php";
if (!(SessionesPet::session_active())) {
    header('Location: index.php');
    exit;
}

$user = new Usuario();
if (!$user->authorizacion('admi')) {
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
                            I Want A Pet
                        </title>

                        <link href="../../img/icon.png" rel="shortcut icon"/>

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
        <a class="btn btn-sm btn-dark" href="#" id="show-sidebar">
            <i class="fas fa-bars">
            </i>
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
            <img src="data:image/jpg;base64,<?php echo base64_encode($user->usuario['foto_perfil']) ?> " class="img-responsive img-rounded" alt="User picture"/>
        <?php else: ?>
            <img alt="User picture" class="img-responsive img-rounded" src="//placehold.it/150">
        <?php endif?>
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>
                            </strong>
                            <strong>
                               <?php echo ($user->usuario['nombre']); ?>
                            </strong>
                        </span>
                        <span class="user-role">
                            <strong>Administrador</strong>
                            <strong> <?php echo ($user->usuario['email']); ?></strong>
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
                        <li class="">
                            <a href="..\administrador\estadisticas.php" >
                                <i class="fas fa-chart-line">
                                </i>
                                <span>
                                    Estadisticas
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" id="mascotas">
                                <i class="fas fa-paw">
                                </i>
                                <span>
                                    Mascotas
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../administrador/administrador.php">
                                            Todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="perros_admin.php">
                                            Perros
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gatos_admin.php">
                                            Gatos
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" id="mascotas">
                                <i class="fas fa-home">
                                </i>
                                <span>
                                    Fundaciones
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="aprobar_fundacion.php">
                                            Aprobar Fundaciones
                                        </a>
                                    </li>
                                    <li>
                                        <a href="gestion_fundaciones.php">
                                            Gestion Fundaciones
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#" id="mascotas">
                                <i class="fas fa-user">
                                </i>
                                <span>
                                    Usuarios
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="gestion_usuarios.php">
                                            Gestion usuarios
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            ver denuncias
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
                                    Mi inicio
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
                        <a class="dropdown-item" href="perfilAdmin.php">
                            Mi perfil
                        </a>
                    </div>
                </div>
                <div>
                    <a href="#" data-toggle="modal" data-target="#Mcerrar_sesion">
                        <i class="fa fa-power-off">
                        </i>
                    </a>

                </div>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->

 <?php include '..\modal\Mcerrar_sesion.php'?>

        <!-- page-content" -->



