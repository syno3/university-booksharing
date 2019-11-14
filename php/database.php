<?php
//create connection to database
// initialize variables

$servername ="localhost";
$dbUsername = "root";
$bdPassword = "";
$dbName = "kabarak book-store";

// create connection

$conn = mysqli_connect($servername, $dbUsername, $bdPassword, $dbName);
// check if connection works
if(!$conn){
  die('connection failed: '. mysqli_connect_error());
}else{
  // echo "conection was succesfull";
}

?>