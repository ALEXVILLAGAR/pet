<?php 
// session_start();
require_once("../../ControlClass.php");
$fundacion = new Fundacion();
if(!SessionesPet::session_active() || !$fundacion->is_fundacion()){
    header('Location: index.php');
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
        <a class="btn btn-sm btn-dark arriba" href="#" id="show-sidebar">
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

        <?php if (isset($fundacion->fundacion['foto_fundacion'])): ?>
            <img src="data:image/jpg;base64,<?php echo base64_encode($fundacion->fundacion['foto_fundacion'])?>" alt="User picture" class="img-responsive img-rounded"/>
        <?php else: ?>
             <img alt="User picture" class="img-responsive img-rounded" src="../../img/user.jpg">
        <?php endif ?>
        
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>
                                <?php  echo($fundacion->fundacion['nombre']); ?>
                            </strong>
                        </span>
                        <span class="user-role">                            
                            Fundación
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
                            <a href="#">
                                <i class="fas fa-paw">
                                </i>
                                <span>
                                    Mis Mascotas
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../fundacion/userfundacion.php">
                                            Todos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../fundacion/misperros.php">
                                            Perros
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../fundacion/misgatos.php">
                                            Gatos
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                            <li>
                            <a href="../fundacion/gmascotas.php" >
                                <i class="fas fa-paw">
                                </i>
                                <span>
                                    Gestión mascotas
                                </span>
                            </a>
                        </li>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-hand-holding-usd">
                                </i>
                                <span>
                                    Donaciones
                                </span>
                                <span class="badge badge-pill badge-primary">
                                    3
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="../fundacion/misdonacionesF.php">
                                            Mis Donaciones
                                        </a>
                                    </li>
                                   </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-user-check">
                                </i>
                                <span>
                                    Calificación Usuario
                                </span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Calificación Usuario
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                           Usuarios Calificados 
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
                        <a class="dropdown-item" href="../perfil/perfilF.php">
                            Mi perfil
                        </a>
                        <a class="dropdown-item" href="#">
                            Help
                        </a>
                        <a class="dropdown-item" href="#">
                            Setting
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
        <?php include '..\modal\Mcerrar_sesion.php'; ?>