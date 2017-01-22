<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

  $new_password = $args->new_password;
  $id = $args->id;

  $sql = "UPDATE tourists SET password = '$new_password' WHERE id='$id'";
  $res=mysqli_query($myConnection, $sql);
  $jsonData = "";
  if($res == false){
    $jsonData = '{"updated":false}';
  }else{
    $jsonData = '{"updated":true}';
  }

  echo $jsonData;

?>
