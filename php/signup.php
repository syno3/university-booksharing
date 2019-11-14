<?php

session_start();
// connect to database

$servername = "localhost";
$username = "username";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// initialize variables
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
// error variable
$error = "";

//check if data exist

if($password == $confirm_password){
    $query = "SELECT * FROM users WHERE username = '$username' ";
    $results = msqli_query($conn, $query);

    $num = mysqli_num_rows($results);
    if($num == 1){
        $error = "Username exist already exist";
// register the user into the database
    }else{
        // $password = md5($password);
        $reg = "INSERT INTO users(username, email, password) VALUES ($username, $email, $password)";
        mysqli_query($conn, $reg);
        $error = "rgistration successful";
        header("location: login.php");
    }
}else{
    $error = "please confirm your password";
    
}
?>