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
</head>
<?php
include_once "../includes/dbh.inc.php";
?>
<body>
   <?php 
if (isset($_SESSION['ad_ccode'])){
echo '


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Edit Page</h3>

                <img src="C:\Users\User\Desktop\adminpage\img_avatar.jfif" alt="Avatar">

            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="adminUpdatepage.php">Home </a>
                </li>

                <li>
                    <a href="customer_details.php">Customers Details</a>
                </li>
            </ul>
        </nav>
                <div class="container">
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
                    <input type="text" class="form-control" id="Check_out_date_tab" placeholder="dd/mm/yy" name="depart_date" required>
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
                  <button type="submit" name="btn-edit" class="btn btn-primary">Update</button>
                </div>
              </form>
                </div>
    </div>
';
if(isset($_POST['btn-edit'])){
    $_SESSION['ad_ccode'] = $id;
    include_once 'dbh.inc.php';
    $economy_seats = mysqli_real_escape_string($conn, $_POST['economy-seats']);
    $business_seats = mysqli_real_escape_string($conn, $_POST['business-seats']);
    $depart_date = mysqli_real_escape_string($conn, $_POST['depart_date']);
    $depart_time = mysqli_real_escape_string($conn, $_POST['depart_time']);
    $depart_location = mysqli_real_escape_string($conn, $_POST['depart_location']);
    $arrive_location = mysqli_real_escape_string($conn, $_POST['arrive_location']);

    $sql = "UPDATE booking_orders SET economy_seats = '$economy_seats',business_seats = '$business_seats',depart_date = '$depart_date',depart_time = '$depart_time',depart_location = '$depart_location',arrive_location = '$arrive_location' WHERE booking_id = '$id'";
    mysqli_query($conn,$sql);
}
}else{
    echo '<script>window.location="admin_login.php"</script>';
}?>
</body>

</html>