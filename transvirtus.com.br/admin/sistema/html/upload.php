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
  header('location: formulario_login.php');
}
  $logado = $_SESSION['login'];

  include_once("class/conexao.php");
  $nome = $_POST['nome'];
  $nome_arquivo = $_FILES['nome_arquivo']['name'];


  
  //Salvar no banco de dados
  $result_produto = "INSERT INTO arquivos (nome, nome_arquivo, proprietario) VALUES ('$nome', '$nome_arquivo', '$logado')";
  $resultado_produto = mysqli_query($conn, $result_produto);
  $ultimo_id = mysqli_insert_id($conn);
  
  
  
  //Pasta onde o arquivo vai ser salvo
  $_UP['pasta'] = 'arquivos/';
  
  //Verificar se é possive mover o arquivo para a pasta escolhida
  if(move_uploaded_file($_FILES['nome_arquivo']['tmp_name'],$_UP['pasta'].$nome_arquivo)){
    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Imagem cadastrada com sucesso!');
        window.location.href='listar.php';</script>";
  }else{
    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Falha ao cadastrar a Imagem');
        window.location.href='cadastro.php';</script>";
  }
