<?php
	include_once("connect_to_mysql.php");

	$args = json_decode(file_get_contents("php://input"));

	$email = $args->email;
	$password = $args->pass;

	$res=mysql_query("SELECT password FROM tourists WHERE email='$email'");
	$row=mysql_fetch_array($res);
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	if( $count == 1 && $row['password']==$password ) {
    	//header("Location: home.php");
    	echo "{logedin:true}";
   	} else {
    	echo "{logedin:false}";
   }
?>