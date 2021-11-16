<!DOCTYPE html>
<html lang="pt-4">

<head>
   <meta charset="UTF-8">
    <title>Transvitrus</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<!--
            ###################################
############## AUTOR -- Leonardo Soldi -- AUTOR###############
            ###################################
-->
</head>

<body>
    <div class="principal">        
        <div>
            <div class="estrutura-left">
                <div class="conteudo-left">
                        <div class="caixa-titulo">
                            <h1>Bem Vindo(a) ao <strong>TransVirtus</strong></h1>
                            <p>Sistema Administrativo de Documentos</p>
                        </div>
                            <div class="login">
                                 <a href="admin/formulario_login.php" class="btn btn-primary" target="_blank">Login</a>
                                 <a href="admin/formulario_cadastro.php" class="btn btn-primary" target="_blank">Registrar-se</a>
                            </div>
                    </div>
                
                <div class="caixa-menu">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="empresa.php">Empresa</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="servicos.php">Serviços <span class="sr-only">(current)</span></a>
                                </li>                            
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="contato.php">Contato</a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="estrutura-left">
                <div class="conteudo-left"></div>
                <main class="caixa-conteudo">
                    <section class="tm-content">
                        <h2 class="mb-5 tm-content-title">Serviços</h2>
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            <img src="img/servicos1.jpg" alt="Image" class="tm-service-img">
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Sistema <strong>TransVirtus</strong></h2>
                                <ul>
                                        <li>Arquivos em Texto.</li>
                                        <li>PDF.</li>
                                        <li>Imagens.</li>
                                        <li>Mensagens.</li>
                                </ul>
                            </div> 
                        </div>
                        <div class="media my-3 mb-5 tm-service-media">                            
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Envios</h2>
                                    <p>Envios de Documentos.</p>
                                        <ul>
                                            <li>Selecione até 10 documentos, para envio de uma vez só.</li>
                                            <li>cadastre seu e-mail</li>
                                            <li>envio pratico</li>
                                        </ul>
                            </div> 
                            <img src="img/servicos2.jpg" alt="Image" class="tm-service-img-r">
                        </div>
                        <div class="media my-3 tm-service-media tm-service-media-img-l">
                            <img src="img/servicos3.jpg" alt="Image" class="tm-service-img">
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Recebimento</h2>
                                    <ul>
                                            <li>Alerta de recebimento de Documento.</li>
                                            <li>Receba e armazene seus Documentos.</li>
                                            <li>Backup a cada minuto.</li>
                                            <li>Contas com até 5 usuários, acesse  <a href="contato.php"><strong style="transition: 1s orange;">Contato</strong></a> para mais informações.</li>
                                    </ul>
                            </div> 
                        </div>                      
                    </section>
                </main>
            </div>
        </div>        

        <div class="estrutura-left">
            <div class="conteudo-left">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                </ul>            
            </div>        
          <div class="caixa-footer tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">&copy;Copyright 2021 TransVirtus. 
                    | Autor: <a rel="nofollow" target="_parent" target="_blank" href="https://www.facebook.com/leo.soldi1997" class="tm-text-link">Leonardo Soldi</a></p>
                </footer>
            </div>  
        </div>        

        <!-- background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>