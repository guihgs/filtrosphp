<?php
	$servername = "localhost";
	$username = "guilherme";
	$password = "adb55kts";
	$dbname = "categories";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Falha ao tentar conectar ao banco de dados'. mysqli_connect_errno();
	}

?>