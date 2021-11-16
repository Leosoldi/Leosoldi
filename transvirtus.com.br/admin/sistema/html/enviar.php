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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"/>
    <meta name="robots" content="noindex,nofollow" />
    <title>Transvirtus | Listar</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"/>    
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
            <a class="navbar-brand" href="index.php"><h1 style="color: darkorange;">TransVirtus</h1></b><span class="logo-text ms-2"></span></a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          </div>
          
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar" ><i class="mdi mdi-menu font-24"></i></a>
              </li>

              <li class="nav-item search-box">
                <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)" ><?php echo $hora ?></a></li>
              </li>
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
            </ul>
          </nav>
        </div>
      </aside>

      <div class="page-wrapper">

        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Envio de Mensagem</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Enviar Mensagem
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">

          <div class="row" >
            <div class="col-md-6"style="width:100%;">
              <div class="card">
                <form class="form-horizontal" action="envio_email.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <h4 class="card-title">Enviar Mensagem</h4>
                    <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-end control-label col-form-label" >Seu Nome</label>
                      <div class="col-sm-9">
                        <input type="text" name="nome" class="form-control" nomeid="fname" placeholder="Seu Nome"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lname" class="col-sm-3 text-end control-label col-form-label" >E-mail Destinatario</label>
                      <div class="col-sm-9">
                        <input type="text"name="destinatario" class="form-control" id="lname" placeholder="E-mail do Destinatario"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lname" class="col-sm-3 text-end control-label col-form-label" >Seu E-mail</label>
                      <div class="col-sm-9">
                        <input type="text" name="email"class="form-control" id="lname" placeholder="Seu e-mail"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="email1"
                        class="col-sm-3 text-end control-label col-form-label">Senha: </label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="senha" id="email1" placeholder="Digite a senha do seu e-mail"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label" >Assunto</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="assunto" id="cono1" placeholder="Assunto"/>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-3"></label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        <input type="file" name="nome_arquivo" class="custom-file-input" id="validatedCustomFile" multiple required  />
                        <label class="custom-file-label" for="validatedCustomFile" ></label>
                      </div>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label" >Digite sua Mensagem:</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="mensagem"></textarea>
                      </div>
                    </div>
                    <div class="border-top">
                    <div class="card-body">
                      <button type="submit" class="btn btn-success text-white">Enviar Mensagem</button>
                    </div>
                  </div>
                  </div>
                </form>
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

