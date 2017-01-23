<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));
	$offer_id = $args->offer_id;
	$user_id = $args->user_id;
	$tmp = intval($user_id);

	$sql = "INSERT INTO reservations (offer_id, tourist_id, begin_date, end_date, price, created_at, updated_at)
          VALUES('$offer_id', '$tmp', DATE(NOW()), DATE(NOW()), 0, NOW(), NOW())";
	$query = mysqli_query($myConnection, $sql) or die(mysqli_error($myConnection));

  if($query == false){
    $jsonData = '{"reserved":false}';
    echo $jsonData;
  }else{
    $jsonData = '{"reserved":true}';
    echo $jsonData;

  }
  

?>
