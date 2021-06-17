<?php
	include "../db.php";

	$query = $db->query("SELECT * FROM products");

	$arr = array();

	if ($query -> num_rows > 0) {
		# code...
		while ($row=$query -> fetch_object()) {
			# code...
			$arr[] = array(
				"id"=> $row -> id,
				"title"=> $row -> title,
				"description"=> $row -> description,
				"image"=>$row->	image
			);
		}
	}

	echo json_encode($arr);
?>