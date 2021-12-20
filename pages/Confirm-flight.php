<?php
include_once 'headNfoot/header.php';
include_once '../includes/dbh.inc.php';

// $sqlAvailableFlightsdate = "SELECT * FROM available_flights WHERE depart_date = '$user_date'";
// $flight_results = $conn->query($sqlAvailableFlightsdate);
// $row = $flight_results->fetch_assoc();
// var_dump($row);
?>
<div class="content_wrapper">
    <div class="clearfix"></div>
    <div class="full_width slider_content_wrap">
                <div class="container">
                  <!-- first content_start -->
                  <div id="building_search" class="flight_booking_tab">
                      <div class="container">
                            <h1>Confirm Order</h1>
                                <div class="row">
                                    <div class="col">
                                        <h3 class="text-center">Your Trip to <?php echo $_SESSION['b_ar']?></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <ul class="list-inline">
                                            <li class="list-inline-item"><p name="flight_name" class="text-center"><span><i class="glyphicon glyphicon-plane"></i>Flight:</span> <?php echo $_SESSION['b_fn']?></p></li> 
                                            <li class="list-inline-item"><p name="depart_location" class="text-center"><span><i class="glyphicon glyphicon-arrow-right"></i>Departure: </span> <?php echo $_SESSION['b_dl']?></p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-time"></i>Time: </span><?php echo $_SESSION['b_dt']?></p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-globe"></i>Arrival:</span> <?php echo $_SESSION['b_ar']?></p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-calendar"></i>Date:</span> <?php echo $_SESSION['b_dd']?></p></li> 
                                                    <li class="list-inline-item"><p class="text-center"><span><i class="glyphicon glyphicon-euro"></i>Price:</span> GHC70</p></li> 
                                    </ul>
                                    </div>
                                </div>
                                <h3>Who is traveling</h3>
                                <form action="../includes/confirmflights.inc.php" method="POST">
                      <div class="flight_booking_inner"> 
                        <p class="text-center text-danger">Please input your details like how it appears on your passport</p>
                        <div class="pull_left location_airport"> 
                         
                          <label>Fullname</label>
                          <input type="text" name="fullname" placeholder="Enter FullName" required> 
                        </div>
                        <div class="pull_left check_in_field"> 
                          <label>Nationality</label> <input type="text" name="nationality"  placeholder="nationality" required>
                          <i class="fa fa-calendar"></i> 
                        </div>
                        <div class="pull_left room_select_field">
                          <label>gender</label> 
                          <select class="form-control " name="gender" id="search_adult" required>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                          </select>
                          <i class="fa fa-caret-down"></i> 
                        </div>
                        <div class="pull_left check_in_field"> 
                          <label>Date of Birth</label> <input type="text" name="DOB"  placeholder="dd/mm/yy" required>
                          <i class="fa fa-calendar"></i> 
                        </div>
                        <div class="pull_left check_in_field"> 
                          <label>Phone</label> <input type="number" name="phone"  placeholder="Phone number" required>
                        </div>
                        <div class="pull_left check_in_field"> 
                          <label>Email</label> <input type="email" name="email"  placeholder="email" required>
                        </div>
                        <div class="pull_left check_in_field"> 
                          <label>Password</label> <input type="password" name="password"  placeholder="password" required>
                        </div>
                        <div class="pull_left submit_field">  
                        Book Now<button class="btn tab_search" name="btn-confirm-flight" value="book" type="submit"> 
						            <i class="glyphicon glyphicon-download"></i></button> 
                        </div>
                      </div>
                      <!-- flight_booking_inner end -->
                      <!-- flight_booking_inner end -->
                    </form>
                    
                            <?php
                            
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