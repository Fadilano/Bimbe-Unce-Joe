<?php
    require 'connection.php';
    session_start();

    $username=$_POST['name'];
    $password=$_POST['password'];

    $query="SELECT * FROM user where username='$username' AND password = '$password'";

    $result = $con->query($query);

    if($result->num_rows == 1){
            // Generating JavaScript code for alert
        echo "<script>alert('You have successfully logged in, $username!');</script>";
    
    // Redirecting after the alert
        echo "<script>window.location.href = 'index.php';</script>";
        exit; // Stop further execution to prevent header errors

    }
    else{
        // Generating JavaScript code for alert
        echo "<script>alert('Wrong name or password');</script>";
    
        // Redirecting after the alert
         echo "<script>window.location.href = 'login.php';</script>";
         exit; // Stop further execution to prevent header errors
         
    }
    $con->close();
 ?>