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
            $username=$_POST['username'];
            $email=$_POST['email'];
            if (!$conn) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
              
              $sql = "UPDATE user SET username='$username',email='$email' WHERE id='$id'";
              
              if (mysqli_query($conn, $sql)) 
              {
                echo "Record updated successfully";
                header('location:orders.php');
              } else {
                echo "Error updating record: " . mysqli_error($conn);
              }

        }
        $result=mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
        $query2=mysqli_fetch_array($result)
        ?>


        <form method="post" action="">
        username:<input type="text" name="username" value="<?php echo $query2['username']; ?>" /><br />
        email:<input type="email" name="email" value="<?php echo $query2['email']; ?>" /><br /><br />
        <br />
        <input type="submit" name="submit" value="update" />
        </form>
        <?php
    }
    ?>
</body>
</html>