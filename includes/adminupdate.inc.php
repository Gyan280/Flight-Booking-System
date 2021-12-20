<?php 
session_start();
if(isset($_POST['btn-insertDb'])){
    include_once 'dbh.inc.php';
    $flight_name = mysqli_real_escape_string($conn,  $_SESSION['a_fn']);
    $economy_seats = mysqli_real_escape_string($conn, $_POST['economy-seats']);
    $business_seats = mysqli_real_escape_string($conn, $_POST['business-seats']);
    $depart_date = mysqli_real_escape_string($conn, $_POST['depart_date']);
    $depart_time = mysqli_real_escape_string($conn, $_POST['depart_time']);
    $depart_location = mysqli_real_escape_string($conn, $_POST['depart_location']);
    $arrive_location = mysqli_real_escape_string($conn, $_POST['arrive_location']);

    $sql = "INSERT INTO available_flights (flight_name,economy_seats,business_seats,depart_date,depart_time,depart_location,arrive_location) VALUES ('$flight_name','$economy_seats','$business_seats','$depart_date','$depart_time','$depart_location','$arrive_location');";
    mysqli_query($conn,$sql);
    header('Location: ../adminpage/adminUpdatepage.php?login=success');
    exit();
};