<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

  $name = $args->name;
  $userEmail = $args->email;
	$msg = $args->msg;

  $msg = wordwrap($msg, 70);

  $subject = "[Contact Form] from: " . $name . " " . $userEmail;

  $ret = mail("info@rezervisi-rs.site", $subject, $msg);

  $jsonData = "";
  if($ret == false){
    $jsonData = '{"sent":false}';
  }else{
    $jsonData = '{"sent":true}';
  }

  echo $jsonData;

?>
