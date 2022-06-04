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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="icon" href="production/images/bikeicon.png" >
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-biking"></i>
                TOPBIKES
            </a>
            <p style="margin-top: 15px; width: 1000px;">Bem vindo, <?php/* echo"$email" */?>. Desfrute da lista diária de bicicletas.</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.html">Fotos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="#">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="logout.php">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="production/images/bike.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Catálogo
            </h2>
        </div>
        <div class="row tm-mb-90 tm-gallery">
        	<?php
                                            // Incluir ficheiro de funções
                                            include_once 'includes/functions.php';
                                            // Cria a conexão à Base de Dados
                                            $link = connection_db();
                                            // Criar Mysql necessário à listagem dos registos da tabela
                                            // Sintaxe da instrução MYSQL SELECT...                                 
                                            // SELECT campo1, campo2, ... FROM tabela 
                                            $query  = "SELECT bike_id, bike_marca, bike_modelo, bike_preco, bike_img FROM bicicletas";

                                            //die($query);
                                            $result = mysqli_query($link, $query); // Executa a instrução MYSQL
                                            
                                            // Verificar se foram encontrados registos
                                            if(mysqli_num_rows($result)!= 0){
                                                // Foram encontrados resgistos
                                                while($row = mysqli_fetch_assoc($result)){                                                
                                                    extract($row);
                                                    echo "
                                                    <div class='col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5'>
                        <img src='images/bike/$bike_img' alt='Image' class='img-fluid'>
                            <h2>$bike_marca</h2>               
                    <div class='d-flex justify-content-between tm-text-gray'>
                        <span style='color: black;'><b>$bike_modelo</b></span>
                        <span>$bike_preco €</span>
                    </div>
            </div>
                                                    ";       
                                                }
                                            }
                                        ?> 
            
                     
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Sobre TOPBIKES</h3>
                    <p>TOPBIKES é um catálogo informativo de bicicletas com o objetivo de dar a conhecer as informações sobre as bicicletas ao público.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Os nossos links</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#">Anúncios</a></li>
                        <li><a href="#">Suporte</a></li>
                        <li><a href="#">A nossa companhia</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://www.instagram.com/lopes_1977/"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <a href="#" class="tm-text-gray text-right d-block mb-2">Termos de uso</a>
                    <a href="#" class="tm-text-gray text-right d-block">Políticas de privacidade</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2021 TOPBIKES Company. Todos os direitos reservados.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">Lopes</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>