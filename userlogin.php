<?php
	session_start();
	include 'functions/dbconnect.php';
	$error = '';

 //login
	if (isset($_POST['logemail'])) {
		
		$mail = $_POST['logemail'];
		$pass = $_POST['logpassword'];

		$passmd5 = md5($pass);

		$query = "SELECT * FROM candidatos WHERE cand_email = '$mail' AND cand_password = '$passmd5'";
		$result = mysqli_query($connect, $query);
		$row = mysqli_fetch_assoc($result);
		$numrows = mysqli_num_rows($result);

		if($numrows == 1){
			$_SESSION['account']=array('userID'=>$row['cand_id'], 'regusername'=>$row['cand_username']);
			header('location:index.php');
		} else{
			$error = 'Email e/ou passwords errados!';
		}
	}

// Registo

	if (isset($_POST['regemail'])) {
		
		$emailReg = $_POST['regemail'];
		$passReg = $_POST['regpass'];
		$usernameReg = $_POST['regusername'];

		$regPassMd5 = md5($passReg);

		$queryReg = "INSERT INTO candidatos (cand_email, cand_password, cand_username) VALUES ('$emailReg', '$regPassMd5', '$usernameReg')";
	
		$resReg = mysqli_query($connect, $queryReg);

		if($resReg){
			echo "<script>alert('Dados Guardados com sucessso')</script>";
		} else {
			echo "<script>alert('Dados Não Guardados com sucessso')</script>";
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="CSS/log.css">
		<title>Predator Pack</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/PREDATOR PACK V4 laranja.jpg"/>
		<script src="jquery-3.2.1.min.js"></script>

		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    
    

	</head>
	<body>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
			<form enctype="multipart/form-data" action="" method="post">

					<h1>Criar conta</h1>
					<br>
					<input type="text" id="regusername" name ="regusername" placeholder="Nome de utilizador"/>
					<input type="email" id="regemail" name ="regemail" placeholder="Email"/>
					<input type="password" id= "regpass" name ="regpass" placeholder="Password"/>
					<br>
					<button type="submit" >Registar</button>

				</form>
			</div>
		
			<div class="form-container sign-in-container">
				<form method="POST">
					<h1>Login</h1>
					<br>
					<div style="color:red; margin-top:5px; margin-bottom:5px; display: none;" id="alertBox" class="error-div"><?php echo $error?></div>
					<input type="email" name="logemail" id="logemail" placeholder="Email" />
					<input type="password" name="logpassword" id="logpassword" placeholder="Password" />
					<br>
					<button type="submit">Login</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
				
						<h1>Bem vindo!</h1>
						<p>Já tens conta? </p>
						<button class="ghost" id="signIn">Login</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Olá!</h1>
						<p>Torna-te num Predador!</p>
						<button class="ghost" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<script>

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

<script>
	$(document).ready(function(){
		if($("#alertBox").length){
			var texto=$("#alertBox").html();
			if(texto!==""){
				$("#alertBox").fadeIn("slow");
				setTimeout(function(){
					$("#alertBox").fadeOut("slow");
				}, 3000);
			}
		}
	});
</script>