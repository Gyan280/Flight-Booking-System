<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login page</title>
    <link rel="stylesheet" href="admindetails.css">
</head>
<body>
    
    <form class="modal-content animate" action="..\includes\adminsignup.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="..\includes\img_avatar.jfif" alt="Avatar" class="avatar">
        </div>
    
        <div class="container">
          <label for="flight_name"><b>Flightname</b></label>
          <input type="text" placeholder="Enter Flight Name" name="flight_name" required>
          <label for="firstname"><b>Firstname</b></label>
          <input type="text" placeholder="Enter Firstname" name="firstname" required>
          <label for="lastname"><b>Lastname</b></label>
          <input type="text" placeholder="Enter Lastname" name="lastname" required>
          <label for="email"><b>Email</b></label>
          <input type="email" id="email" placeholder="Enter Email" name="email" required>
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <label class="radio-inline">
		    <input type="radio" name="gender" value="Female">Female</label>
			<label class="radio-inline">
			<input type="radio" name="gender" value="Male">Male</label><br>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
            
          <button type="submit" name="btn-admin-signup">Signup</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    

</body>
</html>