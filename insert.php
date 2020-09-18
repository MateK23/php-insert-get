<!DOCTYPE html>
<html lang="en">
<head>
	<title>Insert</title>
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


		if (isset($_POST['submit1'])) {
			$product_name=mysqli_real_escape_string($conn,$_POST["product_name"]);
			$description=mysqli_real_escape_string($conn,$_POST["description"]);

			$sql="INSERT INTO `products`(`product_name`, `description`) VALUES ('$product_name','$description')";

			if($conn->query($sql)===TRUE){
				echo "success";
			}
			else{
				echo "Error:".$conn->error;
			}
		}

		if (isset($_POST['submit2'])) {
			$name=mysqli_real_escape_string($conn,$_POST["username"]);
			$password=mysqli_real_escape_string($conn,$_POST["pwd"]);

			$sql="INSERT INTO `users`(`name`, `password`) VALUES ('$name','$password')";

			if($conn->query($sql)===TRUE){
				echo "success";
			}
			else{
				echo "Error:".$conn->error;
			}
		}

		mysqli_close($conn);
	?>
	
	<form method="post" style="outline-style: dotted;">
		<p><input type="text" name="product_name" placeholder="product name"></p>
		<p><input type="text" name="description" placeholder="description"></p>
		<p><input type="submit" name="submit1" value="Insert into products"></p>
	</form>

	<form method="post" style="outline-style: dotted;">
		<p><input type="text" name="username" placeholder="name"></p>
		<p><input type="text" name="pwd" placeholder="password"></p>
		<p><input type="submit" name="submit2" value="Insert into users"></p>
	</form>


	
</body>
</html>
