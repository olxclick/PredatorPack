<?php
session_start();

if(!isset($_SESSION['admin']['stats'])){
  print"<script>top.location='login.php'</script>";
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Predator Pack</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='../CSS/styles.css'>
  <script src='main.js'></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libts/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body bgcolor='white'>

  <div class="topnav">
  <a href="../index.php">Página Inicial</a>
  <a href="?id=1">Candidaturas</a>
  <a href="?id=2">Candidaturas Aceites</a>
  <a href="logout.php" style = "background-color:#A20000; float:right">Logout</a>
  </div>

  <div class="main">
  <?php

    $id = 1;
      if(isset($_GET['id'])){
          $id = $_GET['id'];
      }

      switch ($id) {
          case 1: require_once 'show.php';
                  break;
          case 2: require_once 'aceites.php';
                  break;
          case 8: require_once 'delete.php';
                  break;
          case 7: require_once 'mimi.php';
                  break;
          default: require_once 'show.php';
              break;  
      }
    ?>
  </div>

</body>
</html>
