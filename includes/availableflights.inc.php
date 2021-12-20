<?php 
session_start();
if(isset($_POST['btn-book-flight'])){
    include_once 'dbh.inc.php';
    $departure_location = mysqli_real_escape_string($conn, $_POST['from']);
    $depart_date = mysqli_real_escape_string($conn, $_POST['depart-date']);
    $depart_timing = mysqli_real_escape_string($conn, $_POST['timing']);
    $adults = mysqli_real_escape_string($conn, $_POST['adults']);
    $flight_class = mysqli_real_escape_string($conn, $_POST['class']);
    $arrival_location = mysqli_real_escape_string($conn, $_POST['to']);
    $return_date= mysqli_real_escape_string($conn, $_POST['return-date']);
    $return_time= mysqli_real_escape_string($conn, $_POST['return-timing']);
    $kids= mysqli_real_escape_string($conn, $_POST['kids']);
    $sql = "SELECT * FROM available_flights WHERE depart_location = '$departure_location' AND depart_date = '$depart_date'";
            $results = mysqli_query($conn,$sql);
            $resultsCheck = mysqli_num_rows($results);
            $row = mysqli_fetch_assoc($results);
            var_dump($row);
            echo $depart_date;
            if($resultsCheck == 0){
                header('Location: ../pages/Empty-flight.php?login=success');
            }else{
                $row = mysqli_fetch_assoc($results);
                $_SESSION['d_date'] = $depart_date;
                $_SESSION['d_loct'] = $departure_location;
                $_SESSION['d_time'] = $depart_timing;
                $_SESSION['d_adults'] = $adults;
                $_SESSION['d_class'] = $flight_class;
                $_SESSION['d_arrive'] = $arrival_location;
                $_SESSION['d_arive-date'] = $return_date;
                $_SESSION['d_arrive-time'] = $return_time;
                $_SESSION['d_kids'] = $kids;
                header('Location: ../pages/Book-flight.php?login=success');  
                exit();
            }
            
}