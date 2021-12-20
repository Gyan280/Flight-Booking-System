<?php

if (isset($_POST['btn-signup'])){
    include_once 'dbh.inc.php';
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $birthday = mysqli_real_escape_string($conn,$_POST['birthday']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $passportNumber = mysqli_real_escape_string($conn,$_POST['passportId']);
    //error handlers
    //check for empty fields
    if (empty($username)){
        header('Location: ../pro/signup.php?signup=empty');
        exit();
    }else{
    // check if input characters are valid
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header('Location: ../pro/signup.php?signup=email');
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE user_email = '$email'";
            $results = mysqli_query($conn,$sql);
            $resultsCheck = mysqli_num_rows($results);
            if($resultsCheck > 0){
                header('Location: ../pro/signup.php?signup=usertaken');
                exit();
            }else{
                //hashing password
                $hashpwd = password_hash($password,PASSWORD_DEFAULT);
                //insert user to database
                $sql = "INSERT INTO users (username,password,user_firstname,user_middlename,user_lastname,
                   email,gender,user_birthday,user_phone,user_passportid ) VALUES ('$username','$hashpwd','$firstname','$middlename','$lastname',
                   '$email','$gender','$birthday','$phone','$passportNumber');";
                mysqli_query($conn,$sql);
                header('Location: ../pro/signup.php?signup=success');
                exit();
            }
        }
    }
}else{
    header('Location: ../pro/signup.php');
    exit();
}
