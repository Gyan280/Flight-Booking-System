<?php
session_start();
if(isset($_POST['btn-admin-login'])){
    include_once 'dbh.inc.php';
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "SELECT * FROM admindb WHERE username='$username'";
        $results = mysqli_query($conn,$sql);
        $resultsCheck = mysqli_num_rows($results);
        if($resultsCheck < 1 ){
            header('Location: adminpage\adminUpdatepage.php?login=errorexistsnot');
            exit();
        }else{
                if ($row = mysqli_fetch_assoc($results)){
                    //dehashing
                    $hashpasswrdcheck = password_verify($password,$row['password']);
                    if($hashpasswrdcheck == false){
                        header('Location: adminpage\adminUpdatepage.php?login=errorpassword');
                        exit();
                    }elseif ($hashpasswrdcheck == true){
                        $_SESSION['a_id'] = $row['admin_id'];
                        $_SESSION['a_fn'] = $row['flight_name'];
                        $_SESSION['a_first'] = $row['first_name'];
                        $_SESSION['a_last'] = $row['last_name'];
                        $_SESSION['a_email'] = $row['email'];
                        $_SESSION['a_uid'] = $row['username'];
                        $_SESSION['a_gender'] = $row['gender'];
                        header('Location: ../adminpage/adminUpdatepage.php?login=success');
                        exit();
                    }
                }
            }
        }