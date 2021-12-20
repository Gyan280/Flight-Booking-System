<?php
session_start();
if(isset($_POST['btn-login'])){
    include_once 'dbh.inc.php';
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(empty($email) || empty($password)){
        header('Location: ../pro/customersignin.php?login=empty');
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE email='$email'";
        $results = mysqli_query($conn,$sql);
        $resultsCheck = mysqli_num_rows($results);
        if($resultsCheck < 1 ){
            header('Location: ../pro/customersignin.php?login=erroremail');
            exit();
        }else{
            if ($row = mysqli_fetch_assoc($results)){
                //dehashing
                $hashpasswrdcheck = password_verify($password,$row['password']);
                if($hashpasswrdcheck == false){
                    header('Location: ../pro/customersignin.php?login=errorpasswd');
                    exit();
                }elseif ($hashpasswrdcheck == true){
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_firstname'];
                    $_SESSION['u_last'] = $row['user_lastname'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['username'];
                    $_SESSION['u_gender'] = $row['user_gender'];
                    $_SESSION['u_phone'] = $row['user_phone'];
                    $_SESSION['u_passport'] = $row['user_passportid'];
                    header('Location: ../pro/homepage.php?login=success');
                    exit();
                }
            }
        }
    }
}else{
    header('Location: ../pro/customersignin.php?login=error');
    exit();
}