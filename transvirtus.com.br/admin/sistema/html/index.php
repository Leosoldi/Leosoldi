<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<?php 
session_start();
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: formulario_login.php');
}
  $logado = $_SESSION['login'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('d/m/Y \à\s H:i:s');
  ?>

  <head>
    <meta charset="utf-8" />
    <title>Sistema TransVirtus</title>
    <!-- Favicon icon -->
    <link rel="icon"type="image/png"sizes="16x16" href="../assets/images/favicon.png"/>
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="index.php">
                <h1 style="color: darkorange;">TransVirtus</h1>
              </b>
              <span class="logo-text ms-2">
              </span>
              </a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)" ><i class="ti-menu ti-close"></i></a>
          </div>
          <div class="navbar-collapse collapse"     id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar" ><i class="mdi mdi-menu font-24"></i></a></li>
              <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)" ><?php echo $hora ?></a></li>
            </ul>
            <ul class="navbar-nav float-end">
              <li class="nav-item dropdown">
                <a class=" nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/users/1.jpg"alt="user"class="rounded-circle"width="31"/> 
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:void(0)" ><i class="mdi mdi-account me-1 ms-1"><?php echo '<span style="color:green;text-align:center;">Voce está: Online, <br></span>' . $logado ?></i></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="sair.php"><i class="fa fa-power-off me-1 ms-1"></i> Sair</a>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false" ><i class="mdi mdi-view-dashboard"></i ><span class="hide-menu">Acesso</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="usuarios.php" aria-expanded="false" ><i class="mdi mdi-border-inside"></i><span class="hide-menu">Usuários</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false" ><i class="mdi mdi-receipt"></i><span class="hide-menu">Açoes Documentos</span></a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="listar.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> listar </span></a>
                    <a href="cadastrar.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> cadastrar </span></a>
                    <a href="enviar.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Enviar </span></a>
                  </li>
                </ul>
              </li>
              </li>
              </li>
                  <li class="sidebar-item">
                    <a href="sair.php" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Sair </span></a>
                  </li>
              </li>
                </ul>
              </li>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title"><?php echo ' Olá <span style="color:darkorange"</span>'. $logado ?> ,Seja Bem Vindo(a)</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Acesso Rápido
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-chart-areaspline"></i>
                  </h1>
                  <h6 class="text-white">Usuários</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>
                  </h1>
                  <h6 class="text-white">Usuários</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6 class="text-white">Listar Documentos</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-info text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-arrow-all"></i>
                  </h1>
                  <h6 class="text-white">Cadastrar Documentos</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-receipt"></i>
                  </h1>
                  <h6 class="text-white">Enviar Documentos</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-calendar-check"></i>
                  </h1>
                  <h6 class="text-white">Calendario</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>
                  </h1>
                  <h6 class="text-white">Sair</h6>
                </div>
              </div>
            </div>
          </div>
      </div>
      <footer class="footer text-center">
        <p>&copy;Copyright 2021 TransVirtus| Autor: <a rel="nofollow" target="_parent" target="_blank" href="https://www.facebook.com/leo.soldi1997" class="tm-text-link">Leonardo Soldi</a></p>
      </footer>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>
  </body>
</html>
