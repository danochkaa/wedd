<?php 
	include "../../db.php";
	include "../../config.php";
	if (isset($_POST["login"]) && strlen($_POST["login"])>0  && isset($_POST["password"]) && strlen($_POST["password"])>0){

		$login = $_POST["login"];
		$password = $_POST["password"];

		$exist = $db->query("SELECT * from users WHERE login='$login'");

		if ($exist->num_rows==0){
			header("Location: $base_url/login.php?error=2");
			
		} else {
			$row = $exist->fetch_object();
			if (sha1($password)==$row->password)
			{
				session_start();
				$_SESSION["id"] =$row ->id;
				header("Location: $base_url/index.php");

			}
			else {
				header("Location: $base_url/login.php?error=3");
			}
		}

	} else {
		header("Location: $base_url/login.php?error=1");
	}
?>
