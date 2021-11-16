            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->
<?php
//INICIA SESSÃO
session_start();
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$entrar = $_POST['entrar']; 


require('class/conexao.php');
if ( isset($entrar) ) {


	//verifica se existe o login digitado pelo usuario 
	if ($verifica = mysqli_query($conn, "SELECT * FROM usuarios WHERE login='$login'")){

		if ( mysqli_num_rows($verifica) <=0){

			echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
			<script language='javascript' type='text/javascript' charset='utf-8'>
			alert('Esse login não existe!');
			window.location.href='http://localhost/transvirtus.com.br/admin/formulario_login.php';</script>";

		} else{
			//se existe o login, o sistema verifica se a senha digitada pelo usuario esta correta
			if ($verifica = mysqli_query($conn, "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'")){
				

				if ( mysqli_num_rows($verifica) <=0){
					unset($_SESSION['login']);
            		unset($_SESSION['senha']);
					echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
					<script language='javascript' type='text/javascript' charset='utf-8'>
					alert('Senha incorreta!');
					window.location.href='formulario_login_adm.php';</script>";

				} else { 
		 			$_SESSION['login'] = $login;
		            $_SESSION['senha'] = $senha;
					setcookie("login", $login);
					header("Location:sistema/html/index.php");

				}

			}

		}

	}

}