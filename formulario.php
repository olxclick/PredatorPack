<?php
include_once 'functions/dbconnect.php';
session_start();

if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $morada = $_POST['morada'];
    $telefone = $_POST['telefone'];
    $info = $_POST['info'];
    $plan = $_POST['plan'];

    $id = $_SESSION['account']['userID'];

    $sql= "UPDATE `candidatos` 
    
    SET `cand_nome`='$nome',
    `cand_idade`='$idade',
    `cand_morada`='$morada',
    `cand_telefone`='$telefone',
    `cand_info`='$info',
    `cand_stats`=0,
    `cand_plan`='$plan'
    
     WHERE `cand_id` = '$id'";

    if(mysqli_query($connect, $sql)){
        echo "<script>alert('Application Sent! Wait for your answer.');</script>";
        print "<script>top.location = 'index.php';</script>"; 
    }else{
        echo "<script>alert('We were unable to send your application!');</script>";
        print "<script>top.location = 'index.php';</script>"; 
    }
}

?>

<html>
<link rel="stylesheet" href="CSS/form.css">
<title>Enviar Candidatura</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
</style>

<body bgcolor="#000000">
<div class='w3-top'>
    <a href="index.php" style='color:white' class="w3-button w3-padding-large">Voltar</a>
</div>
        <form method="post">

        <h1>Junta-te a nós!</h1>

        <fieldset>
        <legend><span class="number">1</span>Informações Obrigatórias</legend>
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="name">Idade:</label>
        <input type="text" id="age" name="idade" required>

        <label for="password">Morada:</label>
        <input type="text" id="address" name="morada" required>

        <label for="name">Telemóvel:</label>
        <input type="text" id="phone" name="telefone" required>

        <label for="plan">Planos</label>
        <select id="plan" name="plan" required>
                <optgroup label="Your Plan">
                    <option name = "beta" value="beta">Beta</option>
                    <option name = "omega" value="omega">Omega</option>
                    <option name = "alpha" value="alpha">Alpha</option>
                </optgroup>
                </select>

        </fieldset>

        <fieldset>
        <legend><span class="number">2</span>Informações Adicionais</legend>
        <textarea id="info" name="info"></textarea>
        </fieldset>
        <br><br>
                <br><br>
        <button type="submit" name ="send">Enviar Candidatura</button>
        </form>
    </body>

    <!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-dark-grey w3-xlarge">

</html>