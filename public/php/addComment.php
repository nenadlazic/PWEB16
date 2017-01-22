<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$text = $args->text;
  $advert_id = $args->id;
  $author = $args->author;

  $sql = "INSERT into comments (text, advert_id, author) VALUES('$text', '$advert_id', '$author')";
  $res=mysqli_query($myConnection, $sql);
  $jsonData = "";
  if($res == false){
    $jsonData = '{"added":false}';
  }else{
    $jsonData = '{"added":true}';
  }

  echo $jsonData;

?>
