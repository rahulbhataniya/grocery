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

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style2.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<header class="header">
        <div class="branding">
            <h1>Rock</h1>
        </div>
        <nav  >
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
                <?php }
                 ?>
                
            </ul>
        </nav>
</header>
<center>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<div class="page-header clearfix">
<h2 class="pull-left">Orders List</h2>
<a href="order_insert.php" class="btn btn-success pull-right mb-1 mt-1">Add New User</a>
</div>
</div>
<?php
require_once "config.php";
$result = mysqli_query($conn,"SELECT * FROM orders");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped' style="background-color:white;">
<tr>
<td>No .</td>
<td>Product</td>
<td>Unit</td>
<td>Username</td>
<td>Address</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) 
{
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["product_name"]; ?></td>
<td><?php echo $row["unit"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["addr"]; ?></td>
<td><a href="edit_order.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mb-1" title="Update Record">Edit</a>
<a href="del_order.php?id=<?php echo $row['id']; ?>" class="btn btn-primary mb-1" title="Delete Record">Delete</a>
</td>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</center>
</body>
</html>