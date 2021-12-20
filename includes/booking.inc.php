<?php
session_start();
if (isset($_POST['btn-one-trip'])) {
    include_once 'dbh.inc.php';
    $trip_type = 'One trip';
    $flight_personID = mysqli_real_escape_string($conn, $_SESSION['u_id']);
    $flight_username = mysqli_real_escape_string($conn, $_SESSION['u_uid']);
    $departure = mysqli_real_escape_string($conn, $_POST['to']);
    $arrival = mysqli_real_escape_string($conn, $_POST['from']);
    $depart_time = mysqli_real_escape_string($conn, $_POST['depart']);
    $flight_class = mysqli_real_escape_string($conn, $_POST['class']);
    $flight_name = mysqli_real_escape_string($conn, $_POST['flights']);
    $flight_passengers = mysqli_real_escape_string($conn, $_POST['passengers']);
    $payment_type = mysqli_real_escape_string($conn, $_POST['payment_method']);

   $sql = "INSERT INTO flight_orders (trip_type,arrival,departure,depart_time,flight_class,flight_name,
                   flight_passengers,payment_type,flight_personID,username) VALUES ('$trip_type','$arrival','$departure','$depart_time','$flight_class','$flight_name',
                   '$flight_passengers','$payment_type','$flight_personID','$flight_username');";
    mysqli_query($conn,$sql);
    header('Location: ../pro/successoorder.php');
    exit();
}
elseif(isset($_POST['btn-round-trip'])) {
    include_once 'dbh.inc.php';
    $trip_type = 'Round trip';
    $flight_personID = mysqli_real_escape_string($conn, $_SESSION['u_id']);
    $flight_username = mysqli_real_escape_string($conn, $_SESSION['u_uid']);
    $departure = mysqli_real_escape_string($conn, $_POST['to']);
    $arrival = mysqli_real_escape_string($conn, $_POST['from']);
    $depart_time = mysqli_real_escape_string($conn, $_POST['depart']);
    $arrive_time = mysqli_real_escape_string($conn, $_POST['return']);
    $flight_class = mysqli_real_escape_string($conn, $_POST['class']);
    $flight_name = mysqli_real_escape_string($conn, $_POST['flights']);
    $flight_passengers = mysqli_real_escape_string($conn, $_POST['passengers']);
    $payment_type = mysqli_real_escape_string($conn, $_POST['payment_method']);

    $sql = "INSERT INTO flight_orders (trip_type,arrival,departure,depart_time,arrive_time,flight_class,flight_name,
                   flight_passengers,payment_type,flight_personID,username) VALUES ('$trip_type','$arrival','$departure','$depart_time','$arrive_time','$flight_class','$flight_name',
                   '$flight_passengers','$payment_type','$flight_personID','$flight_username');";
    mysqli_query($conn,$sql);
    header('Location: ../pro/successoorder.php');
    exit();
};
