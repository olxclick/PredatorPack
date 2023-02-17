<?php

session_start();

if(!isset($_SESSION['admin']['stats'])){
  print"<script>top.location='login.php'</script>";
  exit;
}

include '../functions/dbconnect.php';
$CandID = intval($_GET['CandID']);

    $query = "UPDATE candidatos SET cand_stats = 1 WHERE cand_id = $CandID";
    $query2 = "SELECT cand_nome, cand_email FROM candidatos WHERE cand_id = $CandID";
    $result2 = mysqli_query($connect, $query2);
    $row = mysqli_fetch_assoc($result2);
    extract($row);

    if ($result2){
    require 'mail/mailer/PHPMailerAutoload.php';

    $message = file_get_contents('mail/template.html');
    $message = str_replace('%testusername%', $cand_nome, $message); 
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.sapo.pt';
    $mail->SMTPAuth = true;                  
    $mail->Username=''; //your email
    $mail->Password=''; //your email password
    $mail->SMTPSecure = "tls";  
    $mail->Port = 25;



   

    $mail->setFrom('','Title'); //your email | title of the email
    $mail->addAddress($cand_email);
    $mail->addReplyTo(''); //your email
    $mail->CharSet='UTF-8';
    $mail->isHTML(true);
    $mail->Subject='Resposta à sua candidatura';
    $mail->Body= $message;

if(!$mail->send()){
    echo "<script>alert('Email não enviado');</script>";
    print "<script>top.location = 'index.php';</script>";

}else{
    $result = mysqli_query($connect, $query);
    echo '<script>alert("Candidato aceite e email enviado")</script>';
    print "<script>top.location = '?id=2';</script>";
    }
}
    else {
        echo'<script>alert("Erro, tente novamente mais tarde!")</script>';
        print "<script>top.location = '../index.html';</script>";
    }

?> 
<link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg" />
