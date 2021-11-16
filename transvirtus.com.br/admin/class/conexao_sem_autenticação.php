<?php

$conexao = mysqli_connect("localhost", "root", "", "transvirtus_com_br");

//verificar conexao
if (mysqli_connect_errno()) {
	echo "Falha na conexao MySQL: " . mysqli_connect_errno();
	exit();
}