<?php

  require('conexion.php');

  session_start();

  if (!isset($_SESSION['nombrEmpleado'])) {
    header("Location:index.php");
  }

  $nombrEmpleado=$_SESSION['nombrEmpleado'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Seguimiento e inserción laboral IBP</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    
    <!----<link href="vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">--->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link href="css/style.css" rel="stylesheet">

    <!---calendario--->

    
	<link rel="stylesheet" type="text/css" href="css/fullcalendar.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!---->

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!---->

    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="chart/charts.js">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="home.php" class="brand-logo">
                <img class="logo-abbr" src="./images/IBP_icono.png" alt="">
                <img class="logo-compact" src="./images/prueba_ibp.png" alt="">
                <img class="brand-title" src="./images/prueba_ibp.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">



                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i><span><?php echo $nombrEmpleado?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!----    
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a> 
                                    ---->
                                    <a href="salir.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">

                                <a href="salir.php" class="nav-link">
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>

                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">

            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">

                    <li><a class="" href="home.php" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Inicio</span></a>
                    </li>

                    <li class="nav-label first text-light"> <b>Seguimiento de egresados</b>  </li>

                    <li>
                        <a href="egresado.php" aria-expanded="false"><i class="fas fa-file-pdf"></i><span
                        class="nav-text">R.Encuesta</span>
                        </a>
                    </li>

                    <li>
                        <a href="satisfacion.php" aria-expanded="false"><i class="fas fa-file-pdf"></i><span
                        class="nav-text">E. Satisfacción</span>
                        </a>
                    </li>

                    <!--- graficoegresado.php -->
                    <li>
                        <a href="graf/seguimientografcio.php" aria-expanded="false"><i class="fas fa-chart-bar"></i><span
                        class="nav-text">Gráficos</span>
                        </a>
                    </li>


                    <li class="nav-label text-light"><b>Inserción y trayectoria laboral</b></li>

                    <li>
                        <a href="reporteinsercion.php" aria-expanded="false"><i class="fas fa-file-pdf"></i><span
                        class="nav-text">Reportes</span>                                                                
                        </a>
                    </li> 

                    <li>
                        <a href="graf/inserciongraficos.php" aria-expanded="false"><i class="fas fa-chart-bar"></i><span
                        class="nav-text">Gráficos</span>
                        </a>
                    </li>

                    <!---

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Estudiante</span></a>
                        <ul aria-expanded="false">
                            <li><a href="estudiante.php">Lista</a></li>
                            <li><a href="graficoestudiante.php">Gráficos</a></li>
                        </ul>
                    </li>
                    
                    --->

                    
                    <li class="nav-label text-light"><b>Bolsa Laboral</b></li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Usuarios</span></a>
                        <ul aria-expanded="false">
                            <li><a href="usuarioestudiante.php">Estudiantes</a></li>
                            <li><a href="usuarioegresado.php">Egresados</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Puestos</span></a>
                        <ul aria-expanded="false">
                            <li><a href="puestos.php">Ofertas Laborales</a></li>
                            <li><a href="postulados.php">Postulados</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Empresas</span></a>
                        <ul aria-expanded="false">
                            <li><a href="empresas.php">Lista</a></li>
                            <li><a href="graf/empresasgrafico.php">Gráficos</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-label text-light"><b>Asesorías de empleabilidad</b></li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Actividades y Eventos</span></a>
                        <ul aria-expanded="false">
                            <li><a href="inscripciones.php">Inscripciones</a></li>
                            <li><a href="calendario.php">Calendario</a></li>
                        </ul>
                    </li>

                    
                    <li class="nav-label text-light"><b>Cuestionarios</b></li>

                    <li>
                        <a href="segresado.php" aria-expanded="false"><i class="fas fa-graduation-cap"></i><span
                        class="nav-text">Seguimiento </span>
                        </a>
                    </li> 


                    <li>
                        <a href="insercione.php" aria-expanded="false"><i class="fas fa-briefcase"></i><span
                        class="nav-text">Inserción Laboral</span>
                        </a>
                    </li>

                    <li>
                        <a href="esatifacion.php" aria-expanded="false"><i class="fas fa-thumbs-up"></i><span
                        class="nav-text">E.Satisfaction</span>
                        </a>
                    </li>
                    
                    <li class="nav-label first text-light"> <b>Población de egresados</b>  </li>

                    <li>
                        <a href="reporteedusys.php" aria-expanded="false"><i class="fas fa-globe-africa"></i><span
                        class="nav-text">R.Edusys</span>
                        </a>
                    </li>

                    <li>
                        <a href="salir.php" aria-expanded="false"><i class="fas fa-sign-out-alt"></i><span
                        class="nav-text">Salir</span>
                        </a>
                    </li>

            </div>

        </div>

