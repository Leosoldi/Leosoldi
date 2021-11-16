            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->
<?php
// INICIA SESSÃO
session_start();
include_once("class/conexao.php");

/*
echo "<pre>"; 
print_r($_REQUEST);
exit();
*/
//SELECIONA TABELA
$sql = "SELECT * FROM arquivos WHERE id = ".$_REQUEST['id'];
$res = mysqli_query($conn, $sql);
$obj = mysqli_fetch_array($res);

/*
echo "<pre>"; 
print_r($obj);
echo $obj[0];
*/
if(!empty($obj[0])){
    //DELETA DADOS DO BANCO
    $result_usuario = "DELETE FROM arquivos WHERE id='$obj[0]'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    if(mysqli_affected_rows($conn)){
        //DELETA ARQUIVO
        unlink('arquivos/'. $obj[2]);
        echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Arquivo excluído com Sucesso');
        window.location.href='listar.php';</script>";
    }else{
        
        echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Erro ao excluir arquivo');
        window.location.href='usuarios.php';</script>";
    }
}else{  
    echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Erro não comum, contate o administrador do sistema!');
        window.location.href='listar.php';</script>";
}



exit();






