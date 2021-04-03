<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert New Product</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="product_insert_save.php" method="post">
			
			<p>
				<label for="firstName">product Name:</label>
				<input type="text" name="product_name" id="firstName">
			</p>


			
			<p>
				<label for="lastName">Last Name:</label>
				<input type="text" name="price" id="lastName">
			</p>


			
			<p>
				<label for="Gender">Gender:</label>
				<input type="text" name="unit" id="Gender">
			</p>
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
