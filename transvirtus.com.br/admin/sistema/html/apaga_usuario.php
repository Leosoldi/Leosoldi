            <!--###############################################
##############  AUTOR -- Leonardo Soldi --  04/11/2021  AUTOR###############
            ###############################################-->
<?php
//INICIA SESSÃO
session_start();
include_once("class/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	//DELETA DADOS DA TABELA
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Usuário excluído com sucesso');
        window.location.href='usuarios.php';</script>";
	}else{
		
		echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('Falha ao excluir');
        window.location.href='usuarios.php';</script>";
	}
}else{	
	echo "<!DOCTYPE html><html><head><meta charset='utf-8'><title></title></head>
        <script language='javascript' type='text/javascript' charset='utf-8'>
        alert('erro inesperado:Contate o administrador do sistema!');
        window.location.href='usuarios.php';</script>";
}
