<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$manager_id = $args->id_manager;
	$description = $args->description;
  $location = $args->location;
  $type = $args->type;
  $name = $args->name;

  $jsonData = "";

  $sql = "INSERT INTO advertisements (location, name, tip, points, created_at, updated_at)
          VALUES('$location', '$name', '$type', 0, NOW(), NOW())";
  $res=mysqli_query($myConnection, $sql);

  if($res == false){
    $jsonData = '{"added":false}';
    echo $jsonData;
    exit();
  }

  $sql = "SELECT id FROM advertisements WHERE location LIKE '$location' AND name LIKE '$name' limit 1";
  $res=mysqli_query($myConnection, $sql);
  if($res == false){
    $jsonData = '{"added":false}';
    echo $jsonData;
    exit();
  }
  $row=mysqli_fetch_row($res);
  $advert_id = $row[0];

  $sql = "UPDATE adv_managers SET advert_id='$advert_id' WHERE id='$manager_id'";
  $res=mysqli_query($myConnection, $sql);

  if($res == false){
    $jsonData = '{"added":false}';
    echo $jsonData;
    exit();
  }

  /*$sql = "SELECT id FROM advertisements WHERE id='$advert_id'";
  $res=mysqli_query($myConnection, $sql);
  if($res == false){
    $jsonData = '{"added":false}';
    echo $jsonData;
    exit();
  }
  $count = mysqli_num_rows($res);
  if($count <1){
    $jsonData = '{"added":false}';
    echo $jsonData;
    exit();
  }*/

  $sql = "INSERT INTO offers (advert_id, description, created_at, updated_at) VALUES('$advert_id', '$description', NOW(), NOW())";
  $res=mysqli_query($myConnection, $sql);

  $jsonData = "";
  if($res == false){
    $jsonData = '{"added":false}';
  }else{
    $jsonData = '{"added":true}';
  }

  echo $jsonData;

?>
