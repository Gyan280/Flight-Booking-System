<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login page</title>
    <link rel="stylesheet" href="admindetails.css">
</head>
<body>
    
    <form class="modal-content animate" action="..\includes\adminlogin.inc.php" method="POST">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="img_avatar.jfif" alt="Avatar" class="avatar">
        </div>
    
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
            
          <button type="submit" name="btn-admin-login">Login</button>
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