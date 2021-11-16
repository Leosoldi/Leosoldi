            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->

<!DOCTYPE html><html><head>	
	<meta charset="utf-8">
	<title>Sistema de Login</title>
</head>
<body>

<?php
session_start();
error_reporting(0);

$login_cookie = $_COOKIE['login'];

if ( isset($login_cookie) ){

echo "<h2>Bem vindo ".ucfirst($login_cookie)."!</h2>
      Esse sistema pode ser acessado por você!<br><br>
      <a href='logout.php' style='color:red';>Sair</a>";

} else {

	echo "<h2>Bem vindo convidado!</h2>";
	echo "Esse sistema não pode ser acessado por você Contate o administrador do Sistema.<br><br>
	      <a href='formulario_cadastro.html'>Faça seu Cadastro  aqui</a> para ter acesso ao Sisteme!";
}
?>

</body>
</html>
