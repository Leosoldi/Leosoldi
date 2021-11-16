<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transvirtus_com_br";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Conexão Falhou: " . mysqli_connect_error());
}
//echo "Conectado com sucesso successfully";
?>