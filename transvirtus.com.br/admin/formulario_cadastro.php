            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="css/style_login.css">
        <link rel="stylesheet" href="img/imgbg.jpg">
        <meta charset="UTF-8">
        <title>Cadastro de Usuário</title>
    </head>
    <?php $hoje = date('d/m/Y H:i'); ?>


    <body>
        <div class="container">
            <h2>Registre-se</h2>
            <p style="color: darkorange; font-weight: bold;">TransVirtus</p>
                <form action="cadastro.php" method="POST">
                        <div class="input-campo">
                            <input type="text" name="login" id="login" required="" style="text-emphasis: capitalize"/>
                            <label for="login">Login:</label>
                        </div>

                        <div class="input-campo">
                            <input type="text" name="nome" id="nome" required="" style="text-emphasis: capitalize" />
                            <label for="nome" style="text-align: left;">Nome e Sobrenome:</label>
                        </div>

                        <div class="input-campo">
                            <input type="text" name="email" id="email" required=""/>
                            <label for="email">E-mail:</label>
                        </div>

                        <div class="input-campo">
                            <input  type="password" name="senha" id="senha" required=""/>
                            <label for="senha">Senha:</label>
                        </div>

                        <div class="center">
                            <button class="btn-entrar" type="submit" id="cadastrar" name="cadastrar" >Registrar</button>
                        </div>
                </form>            
                        <div class="footer">
                            <p>&copy;Copyright 2021 TransVirtus| Autor: <a rel="nofollow" target="_parent" target="_blank" href="https://www.facebook.com/leo.soldi1997" class="tm-text-link">Leonardo Soldi</a></p>
                        </div>                    
            </div>
        </body>
    </html>