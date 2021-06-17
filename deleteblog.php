<?php
	include "config.php";
	if(isset($_GET["id"])&&strlen($_GET["id"])>0){

		include "db.php";
		$db->query("DELETE FROM products WHERE id=".$_GET["id"]);

	header("Location: ".$base_url);}
	?>
		