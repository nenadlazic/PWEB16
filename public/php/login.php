<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$email = $args->email;
	$password = $args->pass;

	$res=mysqli_query($myConnection, "SELECT password FROM tourists WHERE email='$email'");
	$row=mysqli_fetch_array($res);
	$count = mysqli_num_rows($res);

  if( $count == 1 && $row['password']==$password )
  {
  		$json_response = '{"loggedin":true}';
			echo $json_response;
			exit();
  }
  else {
  		$json_response = '{"loggedin":false}';
  }

	$sql = "SELECT password FROM adv_managers WHERE email='$email'";
	$res = mysqli_query($myConnection, $sql);
	$row = mysqli_fetch_row($res);

	if($row['password']==$password)
  {
  		$json_response = '{"loggedin":true}';
  }
  else {
  		$json_response = '{"loggedin":false}';
  }

	echo $json_response;

?>
