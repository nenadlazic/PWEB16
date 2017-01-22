<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));
	$email = $args->email;
	$password = $args->pass;
	$phone = $args->phone;
	$fname = $args->first_name;
	$lname = $args->last_name;
	$userType = $args->user_type;
	if($userType === 'individual'){
		$sql = "INSERT INTO tourists (email, password, phone, first_name, last_name, points) VALUES('$email', '$password', '$phone', '$fname', '$lname', 0)";
		$query = mysqli_query($myConnection, $sql) or die(mysqli_error($myConnection));
	}else{
		$sql = "INSERT INTO adv_managers (email, phone, first_name, last_name, password, created_at, updated_at)
						VALUES('$email', '$phone', '$fname', '$lname', '$password', NOW(), NOW())";
		$query = mysqli_query($myConnection, $sql) or die(mysqli_error($myConnection));
	}
?>
