<?php 
	// require_once "./partials/connection.php";
	// $sql_query = "UPDATE users SET password = 'password123' WHERE id = 1;";

	// $result = mysqli_query($conn, $sql_query);
	// if($result){
	// 	echo "User successfully updated";
	// } else {
	// 	die(mysqli_error($conn));
	// }
	// mysqli_close($conn);

 ?>

 <form action="./process_update_example.php" method="POST">
 New Password: <input type="password" name="password"></input><button type="submit"> Change password </button>

 </form>
