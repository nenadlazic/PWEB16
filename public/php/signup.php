<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));
	$email = $args->email;
	$password = $args->pass;
	$sql = "INSERT INTO tourists (email, password, phone, first_name, last_name, points) VALUES('$email', '$password', 'telefon', 'Ime', 'Prezime', 6)";
	$query = mysqli_query($myConnection, $sql) or die(mysqli_error($myConnection));
?>