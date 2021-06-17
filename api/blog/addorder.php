<?php 
include "../../config.php";
include "../../db.php";

	if (isset($_GET["query"])) {
		$query = $_GET["query"];
// echo "hi";
	$add = $db->query("
		SELECT `deliveryman`.*, `orders`.*, `deliveryman`.`address` 
			FROM `deliveryman` LEFT JOIN `orders` ON `deliveryman`.`oreder_id` = `orders`.`id` 
				WHERE `deliveryman`.`address` LIKE '%$query%'");

	$res;

	if ($add->num_rows>0) {
		while ($row= $add->fetch_object()) {
			$res[] = array(
				"id"=>$row->id,
				"name"=>$row->name,
				"address"=>$row->address,
				"orderName"=>$row->orderName,
				"product"=>$row->product
			);
		}
	}

	echo json_encode($res);
		

	}


 ?>