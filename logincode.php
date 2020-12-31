<?php
include 'database_detail.php';

 date_default_timezone_set("Asia");
$dbc = mysqli_connect($host, $username, $password, $database);
if (!$dbc) {
    die("Database connection failed: " . mysqli_error($dbc));
    exit();
}

$dbs = mysqli_select_db($dbc, $database);
if (!$dbs) {
    die("Database selection failed: " . mysqli_error($dbc));
    exit(); 
}


$values = mysqli_query($dbc, "SELECT password,email FROM `users` WHERE email='".$_GET["data1"]."' ");
$yourArray = array(); /* here making a new array to hold all the data*/
$index = 0;
while($row = mysqli_fetch_assoc($values)){ /*loop to store the data in an associative array manner*/
     $yourArray[$index] = $row;
     $index++;
}


 echo '[{"password":"'.$yourArray[0]['password'].'","email":"'.$yourArray[0]['email'].'"}]';
 ?>