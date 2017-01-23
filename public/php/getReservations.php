<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$userid = $args->user_id;
$jsonData = "";
  $sql = "SELECT a.name, a.location ,o.description, o.created_at FROM reservations r JOIN offers o ON r.offer_id=o.id JOIN advertisements a on a.id = o.id WHERE r.advert_id='$userid' OR r.tourist_id='$userid'";
  
  $res=mysqli_query($myConnection, $sql);
  $count = mysqli_num_rows($res);
  
  
  $jsonData = '{"offers":[';
  
  if($count>0){
    while($row=mysqli_fetch_row($res)){
      $jsonData .= '{"name":"' . $row[0] . '","location":"' . $row[1] . '","description":"' . $row[2] . '","date":"' . $row[3] . '"},';
    }
    }
    $jsonData = substr(trim($jsonData), 0, -1);
    $jsonData .= ']}';
 


   echo $jsonData;

?>
