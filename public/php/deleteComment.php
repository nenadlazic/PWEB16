<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$id = $args->commentId;

  $sql = "DELETE FROM comments WHERE id='$id'";
  $res=mysqli_query($myConnection, $sql);
  $jsonData = "";
  if($res == false){
    $jsonData = '{"deleted":false}';
  }else{
    $jsonData = '{"deleted":true}';
  }

  echo $jsonData;

?>
