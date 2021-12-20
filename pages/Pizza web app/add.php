<?php 

	
//conect to database
	$conn = mysqli_connect('localhost','Prince', '12345','ninja_pizza');

	//check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}


	// $title = '';
	// $email = '';
	// $ingredients = '';

	$errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');

	if (isset($_POST ['submit'])) {

		//check email
		if(empty($_POST['email'])){
			$errors ['email'] =  'An email is reqired <br />';
		} else{
			$email = $_POST ['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors ['email'] = 'email must be a valid email address <br />';
			}
		}

		//check title
		if(empty($_POST['title'])){
			$errors ['title'] = 'A title is reqired <br />';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors ['title'] = 'Title must be letters and spaces only <br />';
			}
		}


		//check ingredients
		if(empty($_POST['ingredients'])){
			$errors ['ingredients'] ='At least one ingredients is reqired <br />';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors ['ingredients'] = 'Ingredients must be a comma separated list ';		
			}
		}

		if(array_filter($errors)){
			//echo 'errors in the form';
	}else{
			$email = mysqli_real_escape_string($conn,$_POST['email']);
			$title = mysqli_real_escape_string($conn,$_POST['title']);
			$ingredients = mysqli_real_escape_string($conn,$_POST['ingredients']);
			//echo 'form is valid';

			//create sql
			$sql = "INSERT INTO pizzas(title, email,ingredients) VALUES('$email', '$title', '$ingredients')";

			//save to database and check
			if(mysqli_query($conn, $sql)){
			//sucess
					header('Location: index.php');
			}else{
				//error
				echo 'query error: ' , mysqli_error($conn);
			}

		
		}

	}//end of post check
 ?>

 <!DOCTYPE html>
 <html>
 <?php include ('header.php'); ?> 

 <section class="container grey-text">
 	<h4 class=" center">Add a pizza</h4>
 	<form class=" white" action="add.php" method="POST" >
 		<label style="color: white">Your Email:</label>
 		<input type="text" name="email" value=""<?php echo htmlspecialchars('email') ?>>
 		<div class="red-text"><?php echo $errors['email']; ?></div>

		<label style="color: white">Pizza Title:</label>
		<input type="text" name="title" value=""<?php echo htmlspecialchars('title') ?>>
		<div class="red-text"><?php echo $errors['title']; ?></div>

		<label style="color: white">Ingredients (comma separated):</label>
		<input type="text" name="ingredients" value=""<?php echo htmlspecialchars('ingredients') ?>>
		<div class="red-text"><?php echo $errors['ingredients']; ?></div>

		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
 	</form>
 </section>

 <?php include ('footer.php'); ?>

 </body>
 