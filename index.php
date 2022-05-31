<!DOCTYPE html>
<html lang="en">
<title>Predator Pack</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>

<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Página Inicial</a>
    <a href="#plans" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Planos</a>
    <a href="schedule/index.html" class="w3-bar-item w3-button w3-padding-large">Horário</a>


    <?php
    session_start();

      if(!isset($_SESSION["account"]) !== true){
          ?>
          <a href="formulario.php?userid=<?php echo $_SESSION['account']['userID']?>"class="w3-bar-item w3-button w3-padding-large w3-hide-small">Candidatura</a>
          <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
        <?php
      }else{
          ?>
          <a href="userlogin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
          <?php
      }
      

?>
  </div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <div align="center">
    <img src="images/PREDATOR PACK V4 laranja.jpg" style=" width:100%; height:1000px;">
    <iframe width="100%" height="550"
    src="https://www.youtube.com/embed/3ehApR06zQU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  <!-- Team -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="maschool">
    <h2 class="w3-wide">Predator Pack</h2>
    <p class="w3-opacity"><i>Clube de Artes Marciais</i></p>
    <p class="w3-justify">Alguma vez pensaste em juntar-te a uma escola de artes marciais? Se já podemos dizer-te que encontraste a escola certa. Aqui poderás descobrir e integrar qualquer estilo de combate que desejas, desde defesa pessoal, a desportos de combate e até mesmo sessões de yoga!
      Autentica-te no nosso site agora para poderes fazer a tua candidatura!
    </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Ricardo Fonseca</p>
        <br>
        <img src="images/rfonseca.png" class="w3-round w3-margin-bottom" style="width:80%">
      </div>
      <div class="w3-third">
        <p>Jorginho Fonseca</p>
        <br>
        <img src="images/jfonseca.png" class="w3-round w3-margin-bottom" style="width:80%">
      </div>
      <div class="w3-third">
        <p>Affiliate</p>
        <img src="images/associacao.jpg" class="w3-round w3-margin-bottom" style="width:80%">
      </div>
    </div>
  </div>

  <!-- The Plans Section -->
  <div class="w3-black" id="plans">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Planos</h2>
      <p class="w3-opacity w3-center"><i>Sport Kempo || Jiujitsu || Taekwondo</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <div><li style="width: 170px;"class="w3-tag">BETA-->17.5€</li><span class="w3-padding w3-margin-left">2 dias de treino semanal (Apenas 1 modalidade)</span></div>
        <div><li style="width: 170px;"class="w3-tag">OMEGA-->25€</li><span class="w3-padding w3-margin-left">3 dias de treino semanal (Apenas 1 modalidade) +++ Plano de Treino em Casa</span></div>
        <div><li style="width: 170px;"class="w3-tag">ALFA-->50€</li><span class="w3-padding w3-margin-left">Acesso livre +++ Plano de Treino em Casa</span></div>
      </ul>

      <br>
      <br>
      <br>
      <br>

<!--The Information Section-->
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="images/fplk.png" alt="fplk" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white" style="height: 170px;">
            <p><b>Sport Kempo</b></p>
            <p class="w3-opacity">Various Styles of Contact Sports and Forms</p>
            <button class="w3-button w3-black "onclick = "location.href ='https://www.fplohantao.com/';">Learn More</button>
            <p></p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/jiujitsu.png" alt="jiujitsu" style="width:100%" class="w3-hover-opacity">
          <br><br><br><p></p>
          <div class="w3-container w3-white" style="height: 170px;">
            <p><b>Jiujitsu</b></p>
            <p class="w3-opacity">Grapple and Ground Fighting</p>
            <p></p>
            <br>
            <button class="w3-button w3-black "onclick = "location.href ='https://www.fpjjb.com/';">Learn More</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/taekwondo.png" alt="taekwondo" style="width:100%" class="w3-hover-opacity">
          <br><br><br><p></p><br><br>
          <div class="w3-container w3-white" style="height: 170px;">
            <p><b>Taekwondo</b></p>
            <p class="w3-opacity">Light Contact with only your legs</p>
            <button class="w3-button w3-black "onclick = "location.href ='https://fptaekwondo.pt/';">Learn More</button>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div> 
<!-- End Page Content -->
</div>



<!-- Image of location/map -->
<div style="margin: auto"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.6306190097994!2d-8.285608520086292!3d41.27337789337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2492f28bbded7d%3A0x3af6e85461ed9e64!2sR.%20L%C3%BAcia%20Lousada%2C%20Lousada!5e0!3m2!1spt-PT!2spt!4v1621955681948!5m2!1spt-PT!2spt" width="100%" height="450" style="border:10px;" allowfullscreen="" loading="lazy"></iframe></div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-grey w3-xlarge">
</body>
</html>
