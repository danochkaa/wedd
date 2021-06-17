
<?php

 include "../db.php"; 
 $key=$_GET["key"];

 $query=$db->query("SELECT * from products where title Like '%$key%' OR description Like '%$key%' ");


$result = array();

	if ($query -> num_rows > 0) {
		# code...
		while ($row=$query -> fetch_object()) {
			# code...
			$result[] = array(
				"id"=> $row -> id,
				"title"=> $row -> title,
				"description"=> $row -> description,
				"img"=>$row->	img
			);
		}
	}
// обмен данными
	echo json_encode($result); 
?>







 