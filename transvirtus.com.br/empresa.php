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
                                <!--<a href="admin/formulario_cadastro.php" class="btn btn-primary" target="_blank">Registrar-se</a>-->
                                
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
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="Empresa.php">Empresa <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="servicos.php">Serviços</a>
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
                    <section class="tm-content tm-about">
                        <h2 class="mb-5 tm-content-title">Empresa</h2>
                        <hr class="mb-4">
                        <div class="media my-3">
                            <i class="fas fa-shapes fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>Localizada em Curitiba</p>
                                <p>A TransVirtus, conta com um Programador iniciando sua carreira de Desenvolvedor de Sistemas</p>
                                <p>Com seu primeiro desafio, implementar o Backend do Sistema</p>

                            </div> 
                        </div>
                        <div class="media my-3">
                            <i class="fas fa-draw-polygon fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>Desenvolvido com as técnologias HTML/CSS - PHP/JS e MySQL.</p>
                            </div> 
                        </div>
                        <div class="media my-3">
                            <i class="fab fa-creative-commons-share fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>Apresento a vocês o Sistema <strong style="font-weight: bold;font-size:20px;color:darkorange;">TransVirtus</strong></p>
                            </div> 
                        </div>
                        <div class="media my-3">
                            <i class="fas fa-bookmark fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <div class="mapa">
                                <p>Mapa de <strong>Localização</strong></p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14409.523549016712!2d-49.2315760728889!3d-25.45895410828081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce53d1d159987%3A0x98faebec0e634f3c!2sRua%20Rodolpho%20Senff%2C%20804%20-%20Jardim%20das%20Am%C3%A9ricas%2C%20Curitiba%20-%20PR%2C%2081530-240!5e0!3m2!1sen!2sbr!4v1630200206910!5m2!1sen!2sbr" width="450" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
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
                    | Autor: <a rel="nofollow" target="_parent"  target="_blank" href="https://www.facebook.com/leo.soldi1997" class="tm-text-link">Leonardo Soldi</a></p>
                </footer>
            </div>  
        </div>        

        <!-- Diagonal background design -->
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