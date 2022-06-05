<?php
include_once 'functions/dbconnect.php';
    // Cria a conexão à Base de Dados

    // Criar Mysql necessário à listagem dos registos da tabela
    // Sintaxe da instrução MYSQL SELECT...                                 
    // SELECT campo1, campo2, ... FROM tabela 
    $query  = 'SELECT prod_id, prod_nome, prod_desc, prod_price, prod_img FROM produtos';

    //die($query);
    $result = mysqli_query($connect, $query); // Executa a instrução MYSQL

    // Verificar se foram encontrados registos
    if(mysqli_num_rows($result)!= 0){
        // Foram encontrados resgistos
        while($row = mysqli_fetch_assoc($result)){                                                
            extract($row);
?>

<html>
<body>

<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
  <div class='hotSale'>
    <center><i class='fa fa-fire' aria-hidden='true'></i>
    <p>SALE</p></center>
  </div>
  
  <div class='catalogWrapper' ng-app='pageApp' ng-controller='imgCtrl'>
    <div class='displayerWrapper'>
      <div class='mockimagger'>
        <div class='trueimagger'>
          <img ng-src='http://saltandsandals.com/wp-content/uploads/2015/05/{{ current }}.jpg' />
        </div>
      </div>
    </div>
    <div class='thumbsWrapper row'>
      <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
        <h2>$prod_nome</h2>
      </div>
      <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
        <span>$prod_desc</span
      </div>
      <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
        <img class='img-responsive' src='images/bike/$prod_img'/>
      </div>
    </div>
  </div>
</div>

</body>
</html>