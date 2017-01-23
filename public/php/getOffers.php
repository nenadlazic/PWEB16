<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$location = $args->city_name;
	$type = $args->looking_for;

  $sql = "SELECT o.id, a.name, o.description FROM offers o join advertisements a
    on o.advert_id = a.id WHERE a.location='$location' AND a.tip='$type'";
  $res=mysqli_query($myConnection, $sql);
  $count = mysqli_num_rows($res);
  
  $jsonData = '{"offers":[';
  
  if($count>0){
    while($row=mysqli_fetch_row($res)){
      $jsonData .= '{"id":"' . $row[0] . '",'
        . '"name":"' . $row[1] . '",'
        . '"description":"' . $row[2] . '"},';
    }
    $jsonData = substr(trim($jsonData), 0, -1);
    $jsonData .= ']}';
   }
   else{
    $jsonData = '{"found":false}';
   }

   echo $jsonData;

?>
