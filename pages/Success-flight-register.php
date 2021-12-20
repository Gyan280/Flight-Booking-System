<?php
include_once 'headNfoot/header.php';
?>
<div class="content_wrapper">
    <div class="clearfix"></div>
    <div class="full_width slider_content_wrap">
                <div class="container">
                  <!-- first content_start -->
                  <div id="building_search" class="flight_booking_tab">
                      <h1 class="text-center">CONGRATULATIONS <?php echo $_SESSION['c_fullN'] ?> FLIGHT BOOKED</h1>
                      <h2 class="text-center">Your account has been registered</h2>
                      <h3 class="text-center">This is your Confirmation ID <strong><?php echo $_SESSION['c_code'] ?></strong></h3>
                      <p class="text-center">Phone in our office or visit our office with your card and Confirmation Code to pay for your flight </p>
                      <p class="text-center">A Confirmation message will be sent to <?php echo $_SESSION['c_email']?> with a phone number and the location of our offices</p>
                      <p class="text-center text-danger">Please note orders that are not phoned to confirm will be deleted from our system 5 working days after your order Thank You</p>
                  </div>
                </div>
    </div>
</div>
</div>
<?php
include_once 'headNfoot/footer.php';
?>