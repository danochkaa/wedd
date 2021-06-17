<?php




	$db = new mysqli("localhost", "root", "00", "products");

	if($db->connect_error){
		echo $db->connect_error;
	}
	
?>