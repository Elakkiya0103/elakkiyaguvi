<?php

include 'database_detail.php';
date_default_timezone_set("Asia");
$link = mysqli_connect($host, $username, $password, $database);

if($link === false){
    die("ERROR: Connection Failed. " . mysqli_connect_error());
}
$date = date('Y-m-d H:i:s');


$sql ="INSERT INTO `users` (email,password) VALUES ('".$_GET["email"]."','".$_GET["password"]."')";

if(mysqli_query($link, $sql)){
    echo"Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>