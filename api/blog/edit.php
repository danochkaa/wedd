<?php

	include "../../php/config.php";

	if(isset($_POST["login"])&&strlen($_POST["login"])>0&& isset($_POST["description"])&&strlen($_POST["description"])>0&&isset($_POST["id"])&&strlen($_POST["id"])>0){
		
		$id=$_POST["id"];
		$name = $_POST["login"];
		$text = $_POST["description"];

		include "../../php/db.php";			
		$db->query("UPDATE products SET login='$login', text='$description' WHERE id=$id");

		header("Location: ".$base_url);
	}
	else{
		header("Location: ".$base_url."/php/php/editblog.php?error=1&id=".$_POST["id"]);
	}
?>