<?php 
//coonect to database
	$conn = mysqli_connect('localhost','Prince', '12345','ninja_pizza');

	//check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

 ?>