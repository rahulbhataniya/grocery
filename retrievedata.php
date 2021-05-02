<?php
          define('DB_SERVER', 'localhost');
          define('DB_USERNAME', 'root');
          define('DB_PASSWORD', '');
          define('DB_NAME', 'grocery');

          $connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

          if($connect === false)
          {
              die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          $query = "SELECT * FROM user";
          $res = mysqli_query($connect,$query);

          $data_array = array();
          while($rows =mysqli_fetch_assoc($res))
          {
                $data_array[] = $rows;
          }
          $fp = fopen('data.json', 'w');
          if(!fwrite($fp, json_encode($data_array)))
          {
                  die('Error : File Not Opened. ' . mysql_error());
          }
         else
         {
                  echo "Data Retrieved Successully!!!";
         }
         fclose($fp);
?>
