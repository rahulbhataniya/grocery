<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
				
	function get_data() {
		$username = $_POST['username'];
		$file_username='data'. '.json';

		if(file_exists("$file_username")) 
		{
			$current_data=file_get_contents("$file_username");
			$array_data=json_decode($current_data, true);
							
			$extra=array
			(
				'username' => $_POST['username'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
			);
			$array_data[]=$extra;
			echo "file exist<br/>";
			return json_encode($array_data);
		}
		else {
			$datae=array();
			$datae[]=array(
				'username' => $_POST['username'],
				'email' => $_POST['email'],
				'password' => $_POST['password'],
			);
			echo "file not exist<br/>";
			return json_encode($datae);
		}
	}

	$file_username='data'. '.json';
	
	if(file_put_contents("$file_username", get_data())) {
		echo 'success';
	}				
	else {
		echo 'There is some error';				
	}

    include 'insertdata.php';
    header('location:home.php');

}
	
?>
