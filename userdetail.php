<?php

include 'database_detail.php';

$link = mysqli_connect($host, $username, $password, $database);

if($link == false){
    die("ERROR: Connection Failed. " . mysqli_connect_error());
}


$sql ="INSERT INTO `info` (name,age,dob,contact) VALUES ('".$_GET["name"]."','".$_GET["age"]."','".$_GET["dob"]."','".$_GET["contact"]."')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>