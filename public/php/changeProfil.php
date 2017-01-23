<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$email = $args->email;
	$password = $args->password;
  $first_name = $args->firstName;
  $last_name = $args->lastName;
  $phone = $args->phoneNumber;
  $id = $args->id;
  $type = $args->type;

  $jsonData = "";
  
  if($type === "individual"){
       $sql = "UPDATE tourists SET phone='$phone', password='$password', email='$email', first_name='$first_name', last_name='$last_name' WHERE id='$id'";
       $res=mysqli_query($myConnection, $sql);
       if($res == false){
        $jsonData = '{"updated":false}';
       }else{
        $jsonData = '{"updated":true}';
       }
   }else{
       $sql2 = "UPDATE adv_managers SET phone='$phone', password='$password', email='$email', first_name='$first_name', last_name='$last_name' WHERE id='$id'";
       $res2=mysqli_query($myConnection, $sql2);
       if($res2 == false){
        $jsonData = '{"updated":false}';
       }else{
        $jsonData = '{"updated":true}';
       }
   }

    echo $jsonData;
?>