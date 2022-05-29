<?php

session_start();


if(isset($_POST['pin'])){
  $pass = addslashes($_POST['pin']);

  $_SESSION['admin']= array('stats'=> '');
  if($pass == '1234'){
    $_SESSION['admin']= array('stats'=>1);
    print "<script>top.location = 'index.php';</script>";
  
  }else{
    echo "<script>alert ('Incorrect Pin Code')</script>";
    print "<script>top.location = '../index.php'; </script>";
    session_destroy();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Predator Pack</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='CSS/styles.css'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel='stylesheet' type='text/css' media='screen' href='../CSS/styles.css'>
  <script src='main.js'></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libts/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {font-family: "Lato", sans-serif}
  </style>
  <script src='main.js'></script>
</head>

<body>
  <div class='w3-top'>
  <a href="../index.php" style='color:white' class="w3-button w3-padding-large">Home</a>
  </div>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active">PIN</h2>
          <br><br>      
          <!-- Icon -->
          <div class="fadeIn first">
            <img src="images/PREDATOR PACK V4 laranja.jpg" id="icon" alt="User Icon" />
            <br><br>
          </div>
      
          <!-- Login Form -->
          <form method="post">
            <input style ="width: 150px; height:24px;" type="password" id="pin" class="fadeIn second" name="pin" placeholder="PIN">
            <br><br>
            <input type="submit" class="fadeIn fourth" style="background-color: gray" value="Log In">           
          </form>
        </div>
</body>
</html>

