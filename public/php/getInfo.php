<?php
  include_once("connect_to_mysql.php");

  $args = json_decode(file_get_contents("php://input"));

  $id = $args->id;
  $type = $args->type;


  if($type === "individual"){
  $sql = "SELECT first_name, last_name, email, phone, password FROM tourists WHERE id='$id'";
  $res=mysqli_query($myConnection, $sql);
  $count = mysqli_num_rows($res);
  
  $jsonData = "";

  if($count == 1) {
         if($row=mysqli_fetch_row($res)){
          $jsonData .= '{"first_name":"' . $row[0] . '","last_name":"' . $row[1] . '","email":"' . $row[2] . '","phone":"' . $row[3] . '"}';
      }
    }
  } else{
     $sql2 = "SELECT first_name, last_name, email, phone, password FROM adv_managers WHERE id='$id'";
     $res2=mysqli_query($myConnection, $sql2);
     $count2 = mysqli_num_rows($res2);
       
        if($count2 == 1) {
         if($row2=mysqli_fetch_row($res2)){
          $jsonData .= '{"first_name":"' . $row2[0] . '","last_name":"' . $row2[1] . '","email":"' . $row2[2] . '","phone":"' . $row2[3] . '"}';
      }
    }
  }

    echo $jsonData;
?>