<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Adminpage.css">
    <title>Adminpage</title>

    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 3
    0px;
  }
}

/* Style the counter card 1 */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #d8e2dc;
}

/* Style the counter card 2 */
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffe5d9;
}

/* Style the counter card 3 */
.card3 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #ffcad4;
}

/* Style the counter card 4 */
.card4 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f4acb7;
}
</style>

    
</head>
<?php
include_once "../includes/dbh.inc.php";
?>
<body>
    
   <?php 
if (isset($_SESSION['a_id'])){
echo '


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Update Flights</h3>

                <img src="../pages/images/Home/Home4/img_avatar.png" class="img-fluids" style="width:90px; height:90px;  margin-left: auto;
                margin-right: auto;" alt="Avatar">

            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="adminUpdatepage.php">Home </a>
                </li>

                <li>
                    <a href="customer_details.php">Customers Details</a>
                </li>
                <li>
                    <a href="admin_settings.php">Settings</a>
                </li>
            </ul>
        </nav>
                <div class="container">
                <h2>Welcome To Alliance Flight adminpage </h2>
                <br>

<div class="row">
  <div class="column">
    <div class="card1">
      <h3>Employees</h3>
      <h3><p>20</h3></p>
      
      
    </div>
  </div>

  <div class="column">
    <div class="card2">
      <h3>Customers</h3>
      <h3><p>30</h3></p>
     
    </div>
  </div>
  
  <div class="column">
    <div class="card3">
      <h3>Available Flight</h3>
      <h3><p>60</h3></p>
     
    </div>
  </div>
  
  <div class="column">
    <div class="card4">
    <h3>Schedule Dates</h3>
    <h3><p>50</h3></p>
   
     
    </div>
  </div>
</div>
<br>
<br>
                <form action="..\includes\adminupdate.inc.php" method="POST">
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="econony_seats">Economy</label>
                    <input type="number" class="form-control" placeholder="available seats" name="economy-seats" required>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="business_seats">First Beats</label>
                    <input type="number" class="form-control" placeholder="available seats" name="business-seats" required>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="depart_date">Departure Date</label>
                    <input type="text" class="form-control" id="Check_out_date_tab" placeholder="yy/mm/dd" name="depart_date" required>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="depart_time">Departure Time</label>
                  <input type="text" class="form-control" placeholder="depart-time" name="depart_time" required>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="departure_location">Departure Location</label>
                  <input type="text" class="form-control" placeholder="departure-location" name="depart_location" required>
                  </div>
                  <div class="form-group col-md-6">
                  <label for="arrival_location">Arrival Location</label>
                  <input type="text" class="form-control" placeholder="arrival-location" name="arrive_location" required>
                  </div>
                  <button type="submit" name="btn-insertDb" class="btn btn-primary">Update</button>
                </div>
              </form>
                </div>
    </div>
';}else{
echo '<script>window.location="admin_login.php"</script>';
}?>
</body>

</html>