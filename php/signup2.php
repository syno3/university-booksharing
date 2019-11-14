<?php

// check if signups button was clicked
if(isset($_POST["reg-user"])){
    require 'database.php';
    // initialize varibles

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $errors = "";

    // user validation

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)){
        $errors = "please input your details";
        // header("location: ../registration.php?error=emptyfields&username=".$username."&email=".$email);
        // exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $errors = "please input a valid email and username";
        // header("location: ../registration.php?error=inavlidemailusername");
        // exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors = "please enter a valid email";
        // header("location: ../registration.php?error=inavlidemail&username=".$username);
        // exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $errors = "please enter a valid username";
        // header("location: ../registration.php?error=inavlidusername&email=".$email);
        // exit();
    }
    elseif($password !== $confirm_password){
        $errors = "please confirm your password correctly";
        // header("location: ../registration.php?error=passwordcheck&username=".$username."&email=".$email);
        // exit();
    }
    else{
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            $errors = "could not input details to database";
            // header("location: ../registration.php?error=sqlerror");
            // exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_results($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                $errors = "username already exit";
                // header("location: ../registration.php?error=usertaken&email=".$email);
                // exit();
            }
            else{
                $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    $errors = "could not add user to details";
                    // header("location: ../registration.php?error=sqlerror");
                    // exit();
                }
                else{
                    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sss", $username, $email, $password_hashed);
                    mysqli_stmt_execute($stmt);
                    $errors = "registration was successful";
                    // header("location: ../registration.php?signup=success");
                    // exit();
                }
            }
        }

    }
    // mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    // header("location: registration.php");
    // exit();

}
?>