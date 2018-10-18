<?php 
	require_once "./partials/connection.php";
	if(!$conn){
		die("Connection failed! : ( ". mysqli_error($conn));
	} else {
		echo "Connected successfully";
	}
 ?>