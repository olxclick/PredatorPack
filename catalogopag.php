<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Produtos</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg"/>
    <link rel="stylesheet" href="catalog.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body bgcolor="black">

<div class='w3-top'>
    <a href="index.php" style='color:white' class="w3-button w3-padding-large">Voltar</a>
</div>
<br><br>
        <div class="container" style="display:flex;">
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
                                                ?>
                                                <div class='card'>
                                                <div class='card-header'>
                                                  <img style="width:100%; height:100%;"src="images/bike/<?php echo $prod_img?>"   >
                                                </div>
                                                <div class="card-body">
                                            
                                                  <h3>
                                                  <?php echo $prod_nome ?> 
                                                  </h3>
                                                  <span><?php echo $prod_desc?></span>
                                                  <p>
                                                    Preço: 
                                                   <?php echo $prod_price?>€
                                                  </p>
                                            
                                                </div>
                                              </div>   
                                                  <?php    
                                                }
                                            }
                                        ?>
    </div> <!-- container-fluid, tm-container-content -->
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-grey w3-xlarge"><span class="w3-red">Nota:</span><h5>Esta página serve apenas para mostrar o que é possível comprar na escola física, não sendo permitido realizar qualquer tipo de compra online.</h5></footer>
</body>
</html>