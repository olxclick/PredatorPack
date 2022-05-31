<?php
include_once '../functions/dbconnect.php';
if(!isset($_SESSION['admin']['stats'])){
  print"<script>top.location='login.php'</script>";
  exit;
}

    $sql = "SELECT * FROM candidatos WHERE cand_id";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
?>

<link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg" />
  <script src='main.js'></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libts/font-awesome/4.7.0/css/font-awesome.min.css">
    <div>
    <div align='center'>
        <div class="w3-container w3-padding-64 w3-center w3-opacity w3-black">
        <h1 class="w3-title">Candidatos</h1>
        </div>
        <div class="table-responsive">
            <div style="height: 500px; overflow:auto;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Email</th>
                        <th>Morada</th>
                        <th>Telemóvel</th>
                        <th>Informações</th>              
                        <th>Planos</th> 
                        <th>Ferramentas</th>             
                    </tr>
                </thead>
                <tbody>
                <?php
                
            $query  = "SELECT * FROM candidatos WHERE cand_stats = 0";

            $result = mysqli_query($connect, $query); 
            
            
            if(mysqli_num_rows($result)!= 0){
                
                while($row = mysqli_fetch_assoc($result)){                                                
                    extract($row);
                    echo "  <tr>
                                <td style='width: 100px; text-align: center; vertical-align: middle'>
                                $cand_nome
                                </td>
                                <td>
                                $cand_idade
                                </td>
                                <td>
                                $cand_email
                                </td>
                                <td>
                                $cand_morada
                                </td>
                                <td>
                                $cand_telefone
                                </td>
                                <td style='width:20%'>
                                $cand_info
                                </td>
                                <td>
                                $cand_plan
                                </td>
                                <td>
                                <button type='button' onclick='location.href=\"?id=7&CandID=$cand_id\";' class='btn'>Accept</i></button>
                                <button type='button' style='background-color: red' onclick='location.href=\"?id=8&CandID=$cand_id\";' class='btn'>Reject</i></button>
                                </td>
                                </tr>";
                }
            } else {
                echo "  <tr>
                            <td colspan='3'>No data available...</td>
                        </tr> ";
            }
        ?>  

         
                </tbody>
            </table>
        </div>
    </div>
