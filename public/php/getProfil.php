<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

  $email = $args->email;

  $sql = "SELECT first_name, last_name, email, points, phone, created_at, id FROM tourists WHERE email='$email'";
  $res=mysqli_query($myConnection, $sql);
  $count = mysqli_num_rows($res);
  
  $jsonData = "";

  if($count == 1) {
         if($row=mysqli_fetch_row($res)){
          $jsonData .= '{"first_name":"' . $row[0] . '",'
        . '"last_name":"' . $row[1] . '",'
        . '"email":"' . $row[2] . '",'
        . '"points":"' . $row[3] . '",'
        . '"phone":"' . $row[4] . '",'
        . '"created_at":"' . $row[5] .'",'
        . '"id":"' . $row[6] .'",' 
        . '"tourist":true' .','
        . '"manager":false'
        .'}';
      }
    }
  else{
     $sql2 = "SELECT first_name, last_name, email, phone, created_at, id FROM adv_managers WHERE email='$email'";
     $res2=mysqli_query($myConnection, $sql2);
     $count2 = mysqli_num_rows($res2);
       
        if($count2 == 1) {
         if($row2=mysqli_fetch_row($res2)){
          $jsonData .= '{"first_name":"' . $row2[0] . '",'
        . '"last_name":"' . $row2[1] . '",'
        . '"email":"' . $row2[2] . '",'
        . '"phone":"' . $row2[3] . '",'
        . '"created_at":"' . $row2[4] .'",'
        . '"id":"' . $row2[5] .'",' 
        . '"tourist":false' .','
        . '"manager":true'
        .'}';
      }
    }
  }

    echo $jsonData;
?>