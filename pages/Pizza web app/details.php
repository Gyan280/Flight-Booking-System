<?php 
	
		//connect to database
	$conn = mysqli_connect('localhost','Prince', '12345','ninja_pizza');

	//check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	if (isset($_POST['delete'])) {

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

		if(mysqlI_query($conn, $sql)){
			//sucess
			header('location: index.php');
		}else{
			//failure
			echo 'query error: ' . myysqli_error($conn);
		}
	
	}

	//check GET request id parameter
if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	//make sql
	$sql = "SELECT * FROM pizzas WHERE id = $id";

	//get the query result
	$result = mysqli_query($conn, $sql);

	//fetch the result in array format
	$pizza = mysqli_fetch_assoc($result);

	//free connection
	mysqli_free_result($result);
	mysqli_close($conn);

	
}

 ?>

<!DOCTYPE html>
<html>

<?php include ('header.php'); ?>

<div class="container center green-text">
	<?php if($pizza): ?>

		<h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
		<p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
		<p><?php echo date($pizza['created_at']);  ?></p>
		<h5>Ingredients:</h5>
		<p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

		<!----Delete from database----->
		<form action="details.php" method="POST">
			<input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
			<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
		</form>


	<?php else: ?>

		<h5>No such pizza exists!</h5>

	<?php endif; ?>
</div>

 <?php include ('footer.php'); ?>

</html>