<?php 
$name=$_GET['name']; 
$price=$_GET['price'];
$description=$_GET['desc'];
require_once "./partials/connection.php"; 

$sql_query ="INSERT INTO items(name,price,description)VALUES('".$name."','".$price."','".$description."');";
$result = mysqli_query($conn,$sql_query);
if($result){
	echo "item Successfully added";
}else{
	die("item not added".mysqli_error($conn));
}
mysqli_close($conn);
?>