<?php
    /*  session_start();
      $email =$_SESSION['email']; 
      if (!isset($_SESSION['email'])) {
      header("location: index.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopBikes | Catálogo de bicicletas</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Catálogo
            </h2>
        </div>
        <div class="row tm-mb-90 tm-gallery">
        	<?php
                                            // Incluir ficheiro de funções
                                            include_once 'functions/dbconnect.php';
                                            // Cria a conexão à Base de Dados
                                       
                                            // Criar Mysql necessário à listagem dos registos da tabela
                                            // Sintaxe da instrução MYSQL SELECT...                                 
                                            // SELECT campo1, campo2, ... FROM tabela 
                                            $query  = "SELECT prod_id, prod_nome, prod_desc, prod_price, prod_img FROM produtos";

                                            //die($query);
                                            $result = mysqli_query($connect, $query); // Executa a instrução MYSQL
                                            
                                            // Verificar se foram encontrados registos
                                            if(mysqli_num_rows($result)!= 0){
                                                // Foram encontrados resgistos
                                                while($row = mysqli_fetch_assoc($result)){                                                
                                                    extract($row);
                                                    echo "
                                                    <div class='col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5'>
                        <img src='images/bike/$prod_img' alt='Image' class='img-fluid'>
                            <h2>$prod_nome</h2>               
                    <div class='d-flex justify-content-between tm-text-gray'>
                        <span style='color: black;'><b>$prod_desc</b></span>
                        <span>$prod_price€</span>
                    </div>
            </div>
                                                    ";       
                                                }
                                            }
                                        ?> 
            
                     
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-grey w3-xlarge">
</body>
</html>