<?php
    session_start();
    if(isset($_SESSION['u_id'])) {
        if (isset($_POST['search-date'])) {
            $flight_personID = $_SESSION['u_id'];
            include_once 'dbh.inc.php';
            $selectdate = mysqli_real_escape_string($conn, $_POST['selectdate']);
            header('Location: ../pro/datepage.php');
            exit();
        }
    }
$selectdate = mysqli_real_escape_string($conn, $_POST['selectdate']);