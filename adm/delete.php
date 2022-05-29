<?php

session_start();


if(!isset($_SESSION['admin']['stats'])){
  print"<script>top.location='login.php'</script>";
  exit;
}

    include_once '../functions/dbconnect.php';
    $CandID = intval($_GET['CandID']);

    $query = "UPDATE `candidatos` SET `cand_stats` = 3 WHERE cand_id = $CandID";//elimina o registo selecionado
    $result = mysqli_query($connect, $query);// Executa a instrução MYSQL

    if($result){//Dados eliminados com sucesso 
            echo "<script>alert('Candidatura negada');</script>";
            print "<script>top.location = 'index.php';</script>";
        } else {
            echo "<script>alert('Error, try again later!');</script>";     
        }

        print "<script>top.location = 'index.php';</script>";


?>