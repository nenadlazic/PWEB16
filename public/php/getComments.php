<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$advert_id = $args->id;

  $sql = "SELECT text, created_at, id FROM comments WHERE advert_id='$advert_id'";
  $res=mysqli_query($myConnection, $sql);
  $count = mysqli_num_rows($res);
  
  $jsonData = '{"comments":[';
  
  if($count>0){
    while($row=mysqli_fetch_row($res)){
      $jsonData .= '{"text":"' . $row[0] . '",'
        . '"date":"' . $row[1] . '",'
        . '"commentId":' . $row[2] . '"},';
    }
    $jsonData = substr(trim($jsonData), 0, -1);
    $jsonData .= ']}';
  }else{
    $jsonData = '{"found":false}';
  }

  echo $jsonData;

?>
