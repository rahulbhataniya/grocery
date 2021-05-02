<?php

        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'grocery');

        $connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if($connect === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $file_name = "data.json";

        $data = file_get_contents($file_name);

        $rows = json_decode($data, true);

        foreach($rows as $row)
        {
                $sql = "INSERT INTO user(username,email,password) VALUES ('".$row["username"]."','".$row["email"]."','".$row["password"]."')";

                if(!mysqli_query($connect,$sql))
                {
                    echo "Error Occured";
                }
        }
        echo "Successully Inserted";
        

 ?>
