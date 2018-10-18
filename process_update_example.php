<?php
	$password =$_POST['password'];
	require_once "./partials/connection.php";
//UPDATE STATEMENT
	$sql_query ="UPDATE users SET password='$password'WHERE username='admin';";
	$result = mysqli_query($conn,$sql_query);
	if($result){
	echo "User successfully updated";
 }else{
 	die(mysqli_error($conn));
 }
 mysqli_close($conn);
 ?>