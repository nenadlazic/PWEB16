<?php
  include_once("connect_to_mysql.php");

  $args = json_decode(file_get_contents("php://input"));

  $email = $args->email;
  $password = $args->password;
  $first_name = $args->firstName;
  $last_name = $args->lastName;
  $phone = $args->phoneNumber;
  $id = $args->id;
  $type = $args->individual;

  $json_response = "";

  if(type == true){
       $sql = "UPDATE tourists SET password='$password', email='$email', first_name='$first_name', last_name='$last_name', phone='$phone' WHERE id='$id'";
       $res=mysqli_query($myConnection, $sql);
       if($res == true){
        $jsonData = '{"updated":true}';
       }else{
        $jsonData = '{"updated":false}';
       }
   }else{
       $sql = "UPDATE adv_managers SET password='$password', email='$email', first_name='$first_name', second_name='$second_name', phone='$phone' WHERE id='$id'";
       $res=mysqli_query($myConnection, $sql);
       if($res == true){
        $jsonData = '{"updated":true}';
       }else{
        $jsonData = '{"updated":false}';
       }
   }    

    echo $json_response;
?>