<?php 

    require_once("config.php");

if(isset($_GET['id']))
         {
             $id = $_GET['id'];
             $query = " delete FROM products WHERE pro_ID='$id'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:products.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:oproducts.php");
         }

         ?>