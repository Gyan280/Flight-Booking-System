<?php

if (isset($_POST['btn-admin-signup'])){
    include_once 'dbh.inc.php';
    $flightname = mysqli_real_escape_string($conn,$_POST['flight_name']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    //error handlers
    // hashpassword
    $hashpwd = password_hash($password,PASSWORD_DEFAULT);
    //check for empty fields
    $sql = "INSERT INTO admindb (flight_name,username,password,email,first_name,last_name,gender) VALUES ('$flightname','$username','$hashpwd','$email','$firstname','$lastname','$gender');";
    mysqli_query($conn,$sql);
    header('Location: ../adminpage/admin_login.php?signup=success');
};