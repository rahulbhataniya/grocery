
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert New Product</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

<body>
<header class="header">
        <div class="branding">
            <h1>Rock</h1>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="home.php">home</a>
                </li>
                <li>
                    <a href="orders.php">orders</a>
                </li>
                <li>
                    <a href="products.php">products</a>
                </li>
                
                <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) )
                {
                    ?>
                    <li>
                        <a href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"></a>
                    </li>
                    <li>    
                        <a href="logout.php">Logout</a>
                    </li>
                    <?php 
                }
                else
                { ?>
                  <li>
                    <a href="login.php">Login</a>
                    </li>
                    <li>
                    <a href="register.php">Register</a>
                    </li>
                <?php } ?>
                
                </li>
                </ul>
                </div>

               
            </ul>
        </nav>
    </header>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="order_insert_save.php" method="post" style="padding:20px;background-color:white; width:400px;height:200px;">
			
			<p>
				<label for="firstName">product Name:</label>
				<input type="text" name="product_name" id="P_name">
			</p>


			
			<p>
				<label for="Unit">unit:</label>
				<input type="text" name="unit" id="P_unit">
			</p>

            <p>
				<label for="Username">Username:</label>
				<input type="text" name="username" id="P_username">
			</p>

            <p>
				<label for="Unit">Address</label>
				<input type="text" name="Address" id="P_Address">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
