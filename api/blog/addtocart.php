<?php 
include "../../config.php";
include "../../db.php";

if (isset($_GET["p_id"])&&strlen($_GET["p_id"])>0&&isset($_GET["user_id"])&&strlen($_GET["user_id"])>0) {
	$p_id=$_GET["p_id"];
	$user_id=$_GET["user_id"];

$db->query("INSERT INTO cart (user_id,p_id) VALUES ($user_id,$p_id)");

header("Location: $base_url");

}
else{
	header("Location: $base_url?error=1");

}

 ?>