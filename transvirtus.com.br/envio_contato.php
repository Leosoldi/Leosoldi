<?php

            ###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################

//recebe do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

//inclui conexão
include_once 'class/conexao.php';

//requerimento PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//insere os dados no banco

$sql = "INSERT INTO contato_msg (`nome`, `email`, `telefone`, `assunto`, `mensagem`) VALUES('$nome','$email','$telefone','$assunto','$mensagem')";

// ENVIA E-MAIL 
if (mysqli_query($conn, $sql)){
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
            $Mailer->Host = '';
            //Porta de saida de e-mail 
            $Mailer->Port = 25;
            //Dados do e-mail de saida - autenticação
            $Mailer->Username = '';
            $Mailer->Password = '';
            //E-mail remetente (deve ser o mesmo de quem fez a autenticação)
            $Mailer->From = '';
            //Nome do Remetente
            $Mailer->FromName = 'Sistema Transvirtus | Contato!';
            //Assunto da mensagem
            $Mailer->Subject = 'Dúvida do Visitante | TransVirtus';
            //Corpo da Mensagem
            $Mailer->Body = "<html> 
                              <body> 
                            <p style=\"text-align:center;height:100px;background-color:darkorange;border:1px solid #456;border-radius:3px;padding:10px;\">
                                <b>$nome</b><br>
                                <b>$mensagem</b>
                                <br/><br/><br/><a style=\"text-decoration:none;color:#246;\" href=\"http://localhost/transvirtus.com.br>Transvirtus</a>
                            </p>
                            <br/><br/>
                          </body>
                            </html>";
    //Destinatario 
     $Mailer->AddAddress('');
    if($Mailer->Send()){
        echo "<script language='javascript' type='text/javascript' charset='utf-8'>
                alert('Sua Mensagem foi gravada e enviada com Sucesso!');
                window.location.href='index.php';</script>";
    }else{
        echo "<script language='javascript' type='text/javascript' charset='utf-8'>
                alert('Sua Mensagem foi gravada e enviada com Sucesso!<br>Em breve, entraremos em contato');
                window.location.href='contato.php';</script>";
            }
    
        }else {
         echo "<script language='javascript' type='text/javascript' charset='utf-8'>
            alert('Erro ao Gravar no banco!');
            window.location.href='contato.php.php';</script>";
            }

            ?>
