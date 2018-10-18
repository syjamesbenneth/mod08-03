<?php 
	require_once "./partials/connection.php";
	$sql_query = "DELETE FROM users WHERE username = 'brandon';";
	$result = mysqli_query($conn, $sql_query);
	//multiple queries
	$sql_query2 = "SELECT * FROM users";
	$result2 = mysqli_query($conn, $sql_query2);
	echo "Remaining users:" . "<br>";
	while($row = mysqli_fetch_assoc($result2)){
		echo $row['username'] . "<br>";
	}

	mysqli_close($conn);
 ?>