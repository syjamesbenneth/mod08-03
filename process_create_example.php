<?php 
	$username = $_POST['username'];
	 $password = $_POST['password'];

	 require_once "./partials/connection.php";
	 $password = $_POST['password'];

	 //write code here
	 //INSERT statement
	 // $sql_query = "INSERT INTO users(username, password) VALUES ('".$username."','".$password."');";
	 $sql_query = "UPDATE users SET password = '".$password / "' WHERE username = 'admin';";
	 // echo $sql_query;
	 $result = mysqli_query($conn, $sql_query);
	 if($result){
	 	echo "User successfully registered";
	 } else {
	 	die(mysqli_error($conn));
	 }

	 mysqli_close($conn);


 ?>