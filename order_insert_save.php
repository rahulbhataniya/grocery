<!DOCTYPE html>
<html>

<head>
	<title>Insert Product</title>
</head>

<body>
	<center>
		<?php
        require_once "config.php";
		
		// Taking all 5 values from the form data(input)
		$product_name = $_REQUEST['product_name'];
		$unit = $_REQUEST['unit'];
		$username = $_REQUEST['username'];
        $address = $_REQUEST['Address'];
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO orders(product_name,unit,username,addr) VALUES ('$product_name','$unit','$username','$address')";
		
		if(mysqli_query($conn, $sql))
        {
			header('location:orders.php');
			echo "<h3>data stored in a database successfully";
		} 
        else
        {
			echo "ERROR: Hush! Sorry ";
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
