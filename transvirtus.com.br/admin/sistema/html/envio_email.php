            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->
<?php
//INICIA SESSÃO
session_start();
if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: index.php');
}
  $logado = $_SESSION['login'];


$dir = "arquivos/";
$nome =     $_POST['nome'];
$destinatario = $_POST['destinatario'];
$email =    $_POST['email'];
$senha =    $_POST['senha'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
//TRÁS ARQUIVO
$nome_arquivo = $_FILES['nome_arquivo'];


include_once 'class/conexao.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    $Mailer = new PHPMailer();
    //Define que será usado SMTP
    $Mailer->IsSMTP();
    //Enviar e-mail em HTML
    $Mailer->isHTML(true);
    //Aceitar carasteres especiais
    $Mailer->Charset = 'UTF-8';
    //Configurações
    $Mailer->SMTPAuth = true;
    $Mailer->SMTPSecure = 'ssl';
    //nome do servidor
    $Mailer->Host = 'smtp.gmail.com';
    //Porta de saida de e-mail 
    $Mailer->Port = 465;
    //Dados do e-mail de saida - autenticação
    $Mailer->Username = $email;
    $Mailer->Password = $senha;
    //E-mail remetente (deve ser o mesmo de quem fez a autenticação)
    $Mailer->From = $email;
    //Nome do Remetente
    $Mailer->FromName = 'Sistema Transvirtus  |  ' . $nome;
    //Assunto da mensagem
    $Mailer->Subject = $assunto;
    //Corpo da Mensagem
    $Mailer->Body = $mensagem;
    //anexo
    $Mailer->AddAttachment($nome_arquivo['tmp_name'], $nome_arquivo['name']); //TRATA MOME DO ARQUIVO
    //Destinatario 
    $Mailer->AddAddress($destinatario);

    if($Mailer->Send()){
        echo "<script language='javascript' type='text/javascript' charset='utf-8'>
    alert('Sua Mensagem foi enviada com Sucesso!');
    window.location.href='index.php';</script>";
    }else{
        echo "<script language='javascript' type='text/javascript' charset='utf-8'>
    alert('Erro ao enviar o e-mail!');
    window.location.href='enviar.php';</script>";
    }
    
?>