<?php
	require 'connection.php';
 	if(isset($_POST['serviceType_button']))
 	{

		$serviceType = $_POST['serviceType'];
		$query = "SELECT * FROM `products` where id = '$serviceType'";
		$sql = mysqli_query($con, $query);q
		$result = mysqli_fetch_array($sql);

		$service["price"] = $result['price'];
		$service['unit'] = $result['unit'];


		echo json_encode($service);


 	}