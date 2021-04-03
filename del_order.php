<?php 

    require_once("config.php");

if(isset($_GET['id']))
         {
             $id = $_GET['id'];
             $query = " delete FROM user WHERE id='$id'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:orders.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:orders.php");
         }

         ?>