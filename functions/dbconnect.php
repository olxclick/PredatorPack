<?php
//conexao a base de dados
$svname = "localhost";
$username = "root";
$password = "";
$dbname = "predatorpack";

$connect = mysqli_connect($svname, $username, $password, $dbname);
mysqli_Set_charset($connect, "utf8mb4_general_ci");

if(mysqli_connect_error()):
    echo "Falha na conexão".mysqli_connect_error();
endif;


	//Gera nome do ficheiro
	function createFileName() {
		//date_default_timezone_get("Europe/Lisbon");
		$fileName = date("Ymdhisa"); //Y:ano m:mes d:dia h:hora i:minutos s:segundos a:AM/PM

		return $fileName;
}

	//Cria Ficheiro de texto
	function createFileText($fileName, $text) {
		$fh = fopen ("../documents/" . $fileName, 'w') or die("Impossivel abrir ficheiro"); // Abre o ficheiro -> nome ficheiro -> write (subtitui o texto)
		if (fwrite($fh, $text));
		fclose($fh);

		return;
}

	//Pega na extensão do ficheiro
	function getExtension($file) {
		$fileName = $_FILES[$file] ['name'];
		$extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

		return $extension;

}
	//Faz o Upload de ficheiros
	function uploadImage($file, $imageName, $folder = "") {
		$target_dir = "../images/$folder";
		if ($folder != "") {
			$target_dir .= "/"; // images/xx.jpg -> se receber $folder fica images/bird xx.jpg, então colocamos a barra para ficar images/bird/xx.jpg
		}
		$target_file = $target_dir . $imageName;

		move_uploaded_file($_FILES["$file"]["tmp_name"], $target_file);
	}
?>