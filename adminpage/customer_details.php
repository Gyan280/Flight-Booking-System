<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Adminpage.css">
    <link rel="stylesheet" href="customer_details.css">
    <title>Custom Details</title>


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
    $sqlflights = "SELECT * FROM booking_orders";
    $flight_results = $conn->query($sqlflights);

    
}
else{echo '<script>window.location="admin_login.php"</script>';}
?>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Adminpage</h3>
                <img src="../assets/img/img_avatar.jfif" alt="Avatar">

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

        <div id="content" class="py-4">

        <div class="container">
                <h2>Welcome To Alliance Flight adminpage</h2>
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

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="table-responsive">
                        <form method="POST">
                            <table id="myTable" class="table table-striped">
                            
                                <thead class="thead-dark">
                                    <tr>
                                        <th>OrderId</th>
                                        <th>Fullname</th>
                                        <th>Natinonality</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Departure Location</th>
                                        <th>Arrival Location</th>
                                        <th>Departure Date</th>
                                        <th>Departure Time</th>
                                        <th>Adults on Board</th>
                                        <th>Kids on Board</th>
                                        <th>Flight Class</th>
                                        <th>Return Date</th>
                                        <th>Return time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
if ($flight_results->num_rows > 0) {
    // output data of each row
    while($row = $flight_results->fetch_assoc()) {
        $id = $row['booking_id'];
        // var_dump( $row);
                echo '
                <tr>
                <th>'.$row['confirm_code'].'</th>
                <td>'.$row['fullname'].'</td>
                <td>'.$row['nationality'].'</td>
                <td>'.$row['gender'].'</td>
                <td>'.$row['dob'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['departure_location'].'</td>
                <td>'.$row['arrival_location'].'</td>
                <td>'.$row['depart_date'].'</td>
                <td>'.$row['depart_time'].'</td>
                <td>'.$row['adults'].'</td>
                <td>'.$row['kids'].'</td>
                <td>'.$row['flight_class'].'</td>
                <td>'.$row['return_time'].'</td>
                <td>'.$row['return_date'].'</td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <button  name="btn-view-'.$row['booking_id'].'" type="submit" class="btn btn-primary">View</button>
                        <button  name="btn-edit-'.$row['booking_id'].'" type="submit" class="btn btn-info">Edit</button>
                        <button  name="btn-del-'.$row['booking_id'].'" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </td>
            </tr>
            ';
    }
}
if(isset($_POST['btn-view-'.$id])){
    $_SESSION['ad_ccode'] = $id;
    echo '<script>window.location="admin_view.php"</script>';
    // exit();
}elseif(isset($_POST['btn-edit-'.$id])){
    $_SESSION['ad_ccode'] = $id;
    echo '<script>window.location="admin_edit.php"</script>';
    // exit();
}elseif(isset($_POST['btn-del-'.$id])){
    $adConfirmcode = $row['confirm_code'];
    $sql = "DELETE FROM booking_orders WHERE confirm_code = '$adConfirmcode'";
    mysqli_query($conn,$sql);
    echo '<script>window.location="customer_details.php"</script>';
    // exit();
}
                                   ?>
                                </tbody>
                           
                            </table> 
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>