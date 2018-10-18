<?php require_once "./partials/connection.php"; 
?>
<form method="GET" action="./process_add_item.php">
Name:<input type="text"name="name"></input>
Price:<input type="number" name="price"></input>
Description:<input type="text" name="desc"></input>	
<button type="submit">Add item</button>
</form>