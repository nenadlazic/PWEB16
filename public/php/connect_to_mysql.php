<?php  
$db_host = "localhost"; 

$db_username = "pweb_esdbuser";  

$db_pass = "Rezervisi2016";  

$db_name = "pweb_db_exploreserbia"; 


$myConnection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die ("could not connect to mysql"); 

mysqli_set_charset($myConnection, 'utf8');
?>
