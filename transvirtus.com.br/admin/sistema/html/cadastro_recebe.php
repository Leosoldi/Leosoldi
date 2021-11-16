            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->
<?php
session_start();
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: index.php');
}
  $logado = $_SESSION['login'];


$login = $_POST['login'];
$nome =  $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha']; 
$codificada = md5($senha);
$nivel = $_POST['nivel'];

require('class/conexao.php');


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//SELECIONA DADOS DO BANCO -- PREPARA BANCO
$sql = "SELECT login FROM usuarios WHERE login = '$login' AND email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conn,$sql);

$array = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

$login_array = $array['login'];

//verifica de campo está vazio
if ( $login == ""  || $login == null) {

        echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('O campo login deve ser preenchido');
        window.location.href='usuarios.php';</script>";
//verifica de campo está vazio
} else {

if ( $nome == ""  || $nome == null) {

        echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('O campo nome deve ser preenchido');
        window.location.href='usuarios.php';</script>";
//verifica de campo está vazio
}   else  {

if ( $email == ""  || $email == null) {

        echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('O campo email deve ser preenchido');
        window.location.href='usuarios.php';</script>";
//verifica de campo está vazio
} else{

if ( $senha == ""  || $senha == null) {
        echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('O campo senha deve ser preenchido');
        window.location.href='usuarios.php';</script>";
// Verifica se já existe o usuário
} else {

if ( $login_array == $login ){

        echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Esse login já existe');
        window.location.href='usuarios.php';</script>";
// Insere os dados no banco
} else {
        //INSERE DADOS NO BANCO
            $insert = "INSERT INTO usuarios (login,nome,email,senha,nivel) VALUES ('$login','$nome', '$email', '$codificada', $nivel)";
//envia e-mail para o cliente
            if (mysqli_query($conn, $insert)){

            $Mailer = new PHPMailer();
            //Define que será usado SMTP
            $Mailer->IsSMTP();
            //Enviar e-mail em HTML
            $Mailer->isHTML(true);
            //Aceitar carasteres especiais
            $Mailer->Charset = 'UTF-8';
            //Configurações
            $Mailer->SMTPAuth = true;
            $Mailer->SMTPAutoTLS = false;
            $Mailer->SMTPSecure = false;  

            //nome do servidor
            $Mailer->Host = 'mail.transvirtus.x10.mx';
            //Porta de saida de e-mail 
            $Mailer->Port = 25;
            //Dados do e-mail de saida - autenticação
            $Mailer->Username = 'alert@transvirtus.x10.mx';
            $Mailer->Password = 'NE0geMWT';
            //E-mail remetente (deve ser o mesmo de quem fez a autenticação)
            $Mailer->From = 'alert@transvirtus.x10.mx';
    //Nome do Remetente
            $Mailer->FromName = 'Sistema Transvirtus | Cadastro!';
            //Assunto da mensagem
            $Mailer->Subject = 'Mensagem de Boas Vindas | Transvirtus';
            //Corpo da Mensagem
            $Mailer->Body = "<html> 
                              <body> 
                                <p style=\"text-align:center;height:100px;background-color:darkorange;border:1px solid #456;border-radius:3px;padding:10px;\">
                                    <b>Receba seus Dados de acesso:</b><br>Login:
                                     $login<br>Senha:$senha 
                                    <br/><br/><br/><a style=\"text-decoration:none;color:#246;\" href=\"http://localhost/transvirtus.com.br/admin/formulario_login.php\">Login</a>
                                </p>
                                <br/><br/>teste
                              </body>
                            </html>";
            //Destinatario 
             $Mailer->AddAddress($email);

                if($Mailer->Send()){
                    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
                    <script language='javascript' type='text/javascript' charset='utf-8'>
                    alert('Usuário cadastrado com sucesso!');
                    window.location.href='index.php';</script>";

                } else {
                    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
                    <script language='javascript' type='text/javascript' charset='utf-8'>
                    alert('Não foi possível cadastrar o usuário!');
                    window.location.href='usuarios.php';</script>";

                       }
                    }
                 }
              }
           }
        }
 }

