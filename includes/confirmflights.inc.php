<?php
session_start();
if(isset($_POST['btn-confirm-flight'])){
    include_once 'dbh.inc.php';
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $DOB = mysqli_real_escape_string($conn, $_POST['DOB']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $depart_date = $_SESSION['d_date'];
    $departure_location = $_SESSION['d_loct']; 
    $depart_timing = $_SESSION['d_time']; 
    $adults = $_SESSION['d_adults'];
    $flight_class = $_SESSION['d_class'];
    $arrival_location = $_SESSION['d_arrive'];
    $return_date = $_SESSION['d_arive-date'];
    $return_time = $_SESSION['d_arrive-time'];
    $kids = $_SESSION['d_kids'];
    $confirm_code = rand(100000,1000000);
    $hashpwd = password_hash($password,PASSWORD_DEFAULT);
    
    //check if its a new user or old user
    $sql = "SELECT * FROM flight_users WHERE email = '$email'";
    $results = mysqli_query($conn,$sql);
    $resultsCheck = mysqli_num_rows($results);
    if($resultsCheck == 0){
        $sqlRegister = "INSERT INTO flight_users (full_name,nationality,gender,dob,email,phone,password) VALUES ('$fullname','$nationality','$gender','$DOB','$email','$phone','$hashpwd');";
        mysqli_query($conn,$sqlRegister);
        // var_dump($resultsCheck);
        $sql = "INSERT INTO booking_orders (fullname,nationality,gender,dob,email,phone,
        departure_location,arrival_location,depart_date,depart_time,adults,kids,flight_class,return_time,return_date,confirm_code) VALUES ('$fullname','$nationality','$gender','$DOB','$email','$phone',
        '$departure_location','$arrival_location','$depart_date','$depart_timing','$adults','$kids',$flight_class,'$return_time','$return_date','$confirm_code');";
    mysqli_query($conn,$sql);
    $_SESSION['c_fullN'] = $fullname; 
    $_SESSION['c_code'] = $confirm_code; 
    $_SESSION['c_email'] = $email; 
    header('Location: ../pages/Success-flight-register.php?register=success');
    exit();
    }else{
        $sql = "INSERT INTO booking_orders (fullname,nationality,gender,dob,email,phone,
        departure_location,arrival_location,depart_date,depart_time,adults,kids,flight_class,return_time,return_date,confirm_code) VALUES ('$fullname','$nationality','$gender','$DOB','$email','$phone',
        '$departure_location','$arrival_location','$depart_date','$depart_timing','$adults','$kids',$flight_class,'$return_time','$return_date','$confirm_code');";
    mysqli_query($conn,$sql);
    $_SESSION['c_fullN'] = $fullname; 
    $_SESSION['c_code'] = $confirm_code; 
    $_SESSION['c_email'] = $email; 

    
    header('Location: ../pages/Success-flight.php?login=success');
    exit();
    }

    
}
?>