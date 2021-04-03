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
		$price = $_REQUEST['price'];
		$unit = $_REQUEST['unit'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO products(product_name,unit,price) VALUES ('$product_name','$unit','$price')";
		
		if(mysqli_query($conn, $sql))
        {
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
