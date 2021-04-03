<?php
$host = "127.0.0.1"; //IP of your database
$userName = "root"; //Username for database login
$userPass = ""; //Password associated with the username
$database = "grocery"; //Your database name

$connectQuery = mysqli_connect($host,$userName,$userPass,$database);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `user` ORDER BY `id` ASC";
    $result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
        $result_array = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($result_array, $row);
        }

    }

    $results = ["sEcho" => 1,
        	"iTotalRecords" => count($result_array),
        	"iTotalDisplayRecords" => count($result_array),
        	"aaData" => $result_array ];

    echo json_encode($results);

}
?>