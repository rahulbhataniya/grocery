<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style2.css">

    <title>Grocery store</title>
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
                        <a  href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"></a>
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
                <?php }
                 ?>
            </ul>
        </nav>
    </header>
    <center>
        <section class="image_list">
            <ul>
                <li>
                    <a href="#"><img src="images/fruit.webp"></a>
                </li>
                <li>
                    <a href="#"><img src="images/supermarket.webp"></a>
                </li>
                <li>
                    <a href="#"><img src="images/cheese.webp"></a>
                </li>
            </ul>

        </section>
    </center>
</body>

</html>