<?php
//conexao a base de dados
$svname = "localhost";
$username = "root";
$password = "";
$dbname = "predatorpack";

$connect = mysqli_connect($svname, $username, $password, $dbname);
mysqli_Set_charset($connect, "utf8mb4_general_ci");

if(mysqli_connect_error()):
    echo "Falha na conexão".mysqli_connect_error();
endif;
?>