
            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="img/imgbg.jpg">
    <meta charset="UTF-8">
    <title>Tela de Login</title>
    <?php
    $data = date('d/m/Y');
    ?>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p style="color: darkorange; font-weight: bold;">TransVirtus</p>
        <form action="login.php" method="post">
            <div class="input-campo">
                <input input type="text" name="login" id="login" placeholder="vazio">
                <label for="nome">Nome:</label>
            </div>

            <div class="input-campo">
                <input  type="password" name="senha" id="senha" placeholder="vazio">
                <label for="senha">Senha:</label>
            </div>

            <div class="center">
                <button class="btn-entrar" type="submit" name="entrar" id="entrar">Entrar</button>
            </div>
        </form>
        <div class="links-uteis">
            <a href="formulario_cadastro.php" target="_blank"><p>Ainda não sou cadastrado</p> </a>

        </div>
        <div class="footer">
        <p>&copy;Copyright 2021 TransVirtus. 
                    | Autor: <a rel="nofollow" target="_parent" target="_blank" href="https://www.facebook.com/leo.soldi1997" class="tm-text-link">Leonardo Soldi</a></p>
                    <div style="text-align: center; color: white;"><?php echo $data;?></div>
                    <div><p><strong>Versão 1.0</strong></p></div>
        </div>                    
    </div>
</body>
</html>