            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<?php 
//INICIA SESSÃO
session_start();
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: formulario_login.php');
}
  
  
  ?>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"/>
    <meta name="robots" content="noindex,nofollow" />
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <link href='css/personalizado.css' rel='stylesheet' />
    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar.min.js'></script>
    <script src='locale/pt-br.js'></script>
    <title>Sistema transvirtus</title>

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"/>
    <link href="../assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet"/>
    <link href="../assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />

  </head>

  <body>

    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>

    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="index.php">
                <h1 style="color: darkorange;">Transvirtus</h1>
              </b>
              <span class="logo-text ms-2">
              </span>
              </a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)" ><i class="ti-menu ti-close"></i></a>
          </div>
          <div class="navbar-collapse collapse"     id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar" ><i class="mdi mdi-menu font-24"></i></a></li>
              <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)" ><?php echo ' Olá <span style="color:darkorange"</span>'. $logado ?><strong> ,Seja Bem Vindo(a)</strong></a></li>
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
              <li class="sidebar-item">
                    <a href="calendario.php" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendario </span></a>
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
              <h4 class="page-title">Calendario</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Calendario
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <script>
      $(document).ready(function() {
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          defaultDate: Date(),
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          eventLimit: true, // allow "more" link when too many events
          eventClick: function(event) {
            
            $('#visualizar #id').text(event.id);
            $('#visualizar #id').val(event.id);
            $('#visualizar #title').text(event.title);
            $('#visualizar #title').val(event.title);
            $('#visualizar #start').text(event.start.format('DD/MM/YYYY HH:mm:ss'));
            $('#visualizar #start').val(event.start.format('DD/MM/YYYY HH:mm:ss'));
            $('#visualizar #end').text(event.end.format('DD/MM/YYYY HH:mm:ss'));
            $('#visualizar #end').val(event.end.format('DD/MM/YYYY HH:mm:ss'));
            $('#visualizar #color').val(event.color);
            $('#visualizar').modal('show');
            return false;

          },
          
          selectable: true,
          selectHelper: true,
          select: function(start, end){
            $('#cadastrar #start').val(moment(start).format('DD/MM/YYYY HH:mm:ss'));
            $('#cadastrar #end').val(moment(end).format('DD/MM/YYYY HH:mm:ss'));
            $('#cadastrar').modal('show');            
          },
          events: [
            <?php
              while($row_events = mysqli_fetch_array($resultado_events)){
                ?>
                {
                id: '<?php echo $row_events['id']; ?>',
                title: '<?php echo $row_events['title']; ?>',
                start: '<?php echo $row_events['start']; ?>',
                end: '<?php echo $row_events['end']; ?>',
                color: '<?php echo $row_events['color']; ?>',
                },<?php
              }
            ?>
          ]
        });
      });
      
      //Mascara para o campo data e hora
      function DataHora(evento, objeto){
        var keypress=(window.event)?event.keyCode:evento.which;
        campo = eval (objeto);
        if (campo.value == '00/00/0000 00:00:00'){
          campo.value=""
        }
       
        caracteres = '0123456789';
        separacao1 = '/';
        separacao2 = ' ';
        separacao3 = ':';
        conjunto1 = 2;
        conjunto2 = 5;
        conjunto3 = 10;
        conjunto4 = 13;
        conjunto5 = 16;
        if ((caracteres.search(String.fromCharCode (keypress))!=-1) && campo.value.length < (19)){
          if (campo.value.length == conjunto1 )
          campo.value = campo.value + separacao1;
          else if (campo.value.length == conjunto2)
          campo.value = campo.value + separacao1;
          else if (campo.value.length == conjunto3)
          campo.value = campo.value + separacao2;
          else if (campo.value.length == conjunto4)
          campo.value = campo.value + separacao3;
          else if (campo.value.length == conjunto5)
          campo.value = campo.value + separacao3;
        }else{
          event.returnValue = false;
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Agenda</h1>
      </div>
      <?php
      if(isset($_SESSION['login'])){
        echo $_SESSION['login'];
        unset($_SESSION['login']);
      }
      ?>
    
      <div id='calendar'></div>
    </div>

    <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Dados do Evento</h4>
          </div>
          <div class="modal-body">
            <div class="visualizar">
              <dl class="dl-horizontal">
                <dt>ID do Evento</dt>
                <dd id="id"></dd>
                <dt>Titulo do Evento</dt>
                <dd id="title"></dd>
                <dt>Inicio do Evento</dt>
                <dd id="start"></dd>
                <dt>Fim do Evento</dt>
                <dd id="end"></dd>
              </dl>
              <button class="btn btn-canc-vis btn-warning">Editar</button>
            </div>
            <div class="form">
              <form class="form-horizontal" method="POST" action="proc_edit_evento.php">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titulo do Evento">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                  <div class="col-sm-10">
                    <select name="color" class="form-control" id="color">
                      <option value="">Selecione</option>     
                      <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                      <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                      <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                      <option style="color:#8B4513;" value="#8B4513">Marrom</option>  
                      <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                      <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                      <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                      <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>                    
                      <option style="color:#228B22;" value="#228B22">Verde</option>
                      <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                  </div>
                </div>
                <input type="hidden" class="form-control" name="id" id="id">
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" class="btn btn-canc-edit btn-primary">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Salvar Alterações</button>
                  </div>
                </div>
              </form>
              
            
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center">Cadastrar Evento</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="proc_cad_evento.php">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" placeholder="Titulo do Evento">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Cor</label>
                <div class="col-sm-10">
                  <select name="color" class="form-control" id="color">
                    <option value="">Selecione</option>     
                    <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                    <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                    <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                    <option style="color:#8B4513;" value="#8B4513">Marrom</option>  
                    <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                    <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                    <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                    <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>                    
                    <option style="color:#228B22;" value="#228B22">Verde</option>
                    <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Data Inicial</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="start" id="start" onKeyPress="DataHora(event, this)">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Data Final</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="end" id="end" onKeyPress="DataHora(event, this)">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      $('.btn-canc-vis').on("click", function() {
        $('.form').slideToggle();
        $('.visualizar').slideToggle();
      });
      $('.btn-canc-edit').on("click", function() {
        $('.visualizar').slideToggle();
        $('.form').slideToggle();
      });
    </script>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../dist/js/pages/calendar/cal-init.js"></script>
  </body>
</html>
