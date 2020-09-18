<!DOCTYPE html>
<html lang="en">
<head>
	<title>Get</title>
</head>
<body>
	<?php 
		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "phpoopbtu";

		$conn = new mysqli($server, $username, $password, $db);

		if (!$conn) {
			die("Conn failed: " . mysli_connect_error());
		}

		$sql="SELECT * FROM `products`";
		$result=$conn->query($sql);
		echo "products: <br>";
		echo "------------------<br><br>";

		while ($row = $result->fetch_assoc()) {
			echo $row["product_name"]." ".$row["description"]."<br>";
		}
		echo "------------------<br>";

		$sql="SELECT * FROM `users`";
		$result=$conn->query($sql);
		echo "users: <br>";
		echo "------------------<br><br>";
		while ($row = $result->fetch_assoc()) {
			echo $row["name"]." ".$row["password"]."<br>";
		}
		echo "------------------<br>";
	
	?>
	
</body>
</html>
