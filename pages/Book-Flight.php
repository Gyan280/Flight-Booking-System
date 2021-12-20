<?php
include_once 'headNfoot/header.php';
include_once '../includes/dbh.inc.php';
$user_date = $_SESSION['d_date'];

$sqlAvailableFlightsdate = "SELECT * FROM available_flights WHERE depart_date = '$user_date'";
$flight_results = $conn->query($sqlAvailableFlightsdate);
// $row = $flight_results->fetch_assoc();
// var_dump($user_date);
?>
<div class="content_wrapper">
    <div class="clearfix"></div>
    <div class="full_width slider_content_wrap">
                <div class="container">
                  <!-- first content_start -->
                  <div id="building_search" class="flight_booking_tab">
                      <div class="container">
                            <h1>Available flights</h1>
                            
                                        <?php 
                                           while($row = mysqli_fetch_assoc($flight_results)) {
                                                $id = $row['id'];
                                            // var_dump( $row);
                                                   echo '
                                                        <form method="post">
                                                    <div class="row">
                                                        <div class="col">
                                                          <ul class="list-inline">
                                                    <li class="list-inline-item"><p name="flight_name" class="text-center"><span><i class="glyphicon glyphicon-plane"></i>Flight:</span> '.$row['flight_name'].'</p></li> 
                                                    <li class="list-inline-item"><p name="depart_location" class="text-center"><span><i class="glyphicon glyphicon-arrow-right"></i>Departure: </span> '.$row['depart_location'].'</p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-time"></i>Time: </span>'.$row['depart_time'].'</p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-globe"></i>Arrival:</span> '.$row['arrive_location'].'</p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-calendar"></i>Date:</span> '.$row['depart_date'].'</p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-euro"></i>Price:</span> GHC700</p></li> 
                                                     <li class="list-inline-item"><button type="submit" name='.$row['id'].'  class="btn tab_search btn-primary">Book Now</button></li>
                                                     '.$id.'
                                                     </ul>
                                                     </div>
                                                 </div>
                                                 </form>
                                                    ';
                                                    if(isset($_POST[$id])){
                                                        $_SESSION['b_fn'] = $row['flight_name'];
                                                        $_SESSION['b_dl'] = $row['depart_location'];
                                                        $_SESSION['b_dt'] = $row['depart_time'];
                                                        $_SESSION['b_ar'] = $row['arrive_location'];
                                                        $_SESSION['b_dd'] = $row['depart_date'];
                                                        echo '<script>window.location="Confirm-flight.php"</script>';
                                                        // exit();
                                                    }
                                                };
                                        ?> 
                      </div>
                  </div>
                </div>
    </div>
</div>
</div>
<?php
include_once 'headNfoot/footer.php';
?>