<html>
  <head>
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
    <?php
    require_once "config.php";
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        require_once "config.php";
        if(isset($_POST['submit']))
        {
            $P_name=$_POST['Product_name'];
            $P_price=$_POST['price'];
            $P_unit=$_POST['unit'];
            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
              
              $sql = "UPDATE products SET product_name='$P_name',price='$P_price',unit='$P_unit' WHERE pro_ID='$id'";
              
              if (mysqli_query($conn, $sql)) 
              {
                echo "Record updated successfully";
                header('location:products.php');
              } else {
                echo "Error updating record: " . mysqli_error($conn);
              }

        }
        $result=mysqli_query($conn,"SELECT * FROM products WHERE pro_ID='$id'");
        $query2=mysqli_fetch_array($result)
        ?>

        <form method="post" action="">
        Product ID:<input type="text" name="Product_ID" value="<?php echo $query2['pro_ID']; ?>" /><br />
        Product name:<input type="text" name="Product_name" value="<?php echo $query2['product_name']; ?>" /><br />
        Price:<input type="text" name="price" value="<?php echo $query2['price']; ?>" /><br />        <br />
        Unit:<input type="text" name="unit" value="<?php echo $query2['unit']; ?>" /><br />
        <input type="submit" name="submit" value="update" />
        </form>
        <?php
    }
    ?>
</body>
</html>