<?php 
	
	header("Content-Type:text/plain");

	$id = $_POST["id"];
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$area = $_POST["area"];
	$email = $_POST["email"];

	include "../DBVar.php";

	$link = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
	
	$query = "INSERT INTO `ajaxt1`.`tutor` (`id`, `name`, `lastname`, `gender`, `area`, `email`) VALUES ('$id', '$name', '$lastname', '$gender', '$area', '$email');";
	
	if (!$link) {
		die("<h3 class='text-danger'>Error de Conexión (" . mysqli_connect_errno() . ") ". mysqli_connect_error() . "</h3>");
	}

	if (mysqli_query($link, $query) == true) {
		echo "<h3 class='text-success'>Se ha creado con éxito el tutor</h3>";
	}else{
		echo "<h3 class='text-danger'>No se creó el tutor, algo ocurrio</h3>";
	}

	mysqli_close($link);

?>