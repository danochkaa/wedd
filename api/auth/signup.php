<?php
	
	include "../../db.php";
	include "../../config.php";

	if(isset($_POST["login"])&&strlen($_POST["login"])>0&& isset($_POST["full_name"])&&strlen($_POST["full_name"])>0&&isset($_POST["password"])&&strlen($_POST["password"])>0&& isset($_POST["password2"])&&strlen($_POST["password2"])>0){

		$login=$_POST["login"];
		$full_name=$_POST["full_name"];
		$password=$_POST["password"];
		$password2=$_POST["password2"];

		$exist = $db->query("SELECT * FROM users WHERE login='$login'");
	if ($exist->num_rows>0){
			header("Location: $base_url/register.php?error=2");
		} 
		else {
			$password=sha1($password);
			$password2=sha1($password2);
			$db->query("INSERT into users (login, full_name, password, password2) VALUES ('$login','$full_name','$password','$password2')");


			header("Location: $base_url/login.php");
		}

	} else {
		header("Location: $base_url/register.php?error=1");
	}

			?>