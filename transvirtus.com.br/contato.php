<!DOCTYPE html>
<html lang="pt-4">


<head>
    <meta charset="UTF-8">
    <title>Transvitrus - Contato</title>
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
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="empresa.php">Empresa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="servicos.php">Serviços</a>
                                </li>                            
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="contato.php">Contato <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="estrutura-left">
                <div class="conteudo-left"></div>
                <main class="caixa-conteudo tm-contact-main"> 
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Contato</h2>
                        <p class="mb-85">Preencha os campos e aguarde nosso contato:</p>
                        <form id="contact-form"  action="envio_contato.php" method="POST">
                            <div class="form-group mb-4">
                                <label for="nomesobrenome">Nome e Sobrenome:</label>
                                <input type="nomesobrenome" id="nomesobrenome" name="nome" class="form-control" placeholder="Nome" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="email">Seu E-mail:</label>
                                <input  type="email" id="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="telefone">Telefone:</label>
                                <input type="Telefone" id="telefone" name="telefone" class="form-control" placeholder="(DDD) XXXX-XXXX" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="assunto">Assunto:</label>
                                <input  type="assunto" id="assunto" name="assunto" class="form-control" placeholder="Assunto" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <label for="assunto">Mensagem:</label>
                                <textarea type = "textarea" rows="7" name="mensagem" class="form-control" placeholder="Mensagem..." required="" maxlength="200"></textarea>
                            </div>
                                <input  class="btn btn-big btn-primary" type="submit" value="Enviar" name="SendAddMsg">
                        </form>
                        <div class="media my-3">
                            <div class="media-body">
                                <div class="mapa">
                                <p>Mapa de <strong>Localização</strong></p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14409.523549016712!2d-49.2315760728889!3d-25.45895410828081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce53d1d159987%3A0x98faebec0e634f3c!2sRua%20Rodolpho%20Senff%2C%20804%20-%20Jardim%20das%20Am%C3%A9ricas%2C%20Curitiba%20-%20PR%2C%2081530-240!5e0!3m2!1sen!2sbr!4v1630200206910!5m2!1sen!2sbr" width="450" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                            </div> 
                        </div>                
                    </section>
                </main>
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