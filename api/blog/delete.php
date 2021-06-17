<?php
	include "../../db.php";
	include "../../config.php";
	if (isset($_GET["p_id"]) && strlen($_GET["p_id"])>0&&isset($_GET["user_id"]) && strlen($_GET["user_id"]) > 0) {
		$p_id = $_GET["p_id"];
		$user_id = $_GET["user_id"];
		$db -> query("DELETE FROM cart WHERE p_id=$p_id AND user_id=$user_id");
		
	}
	header("Location: $base_url/cart.php?id=$user_id");
?>