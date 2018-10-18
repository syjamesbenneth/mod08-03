<?php 
	require_once "./partials/connection.php";

	//SELECT
	$query = "SELECT * FROM users WHERE username = 'brandon';";
	$query = "SELECT * FROM users;";
	$result = mysqli_query($conn, $query);
	//rows obtained from the query
	if($result){
		while($row = mysqli_fetch_assoc($result)) {
		//As long as there is data/rows in my $result, assign it to $row and move to next row.
			//$row is an assoc array containing the key value pairs where the ekys are your column names
			echo "ID is" . $row['id'] . "<br>";
			echo "User is " . $row['username'] . "<br>";
			echo "Password is " . $row['password'] . "<br>";
		}

	} else {
		die("Connection error". mysqli_error($conn));
	}
	mysqli_close($conn);
 ?>