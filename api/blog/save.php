<?php 
	include "../../db.php";
	include "../../config.php";
	// header("Location: eda/login.php");
	$title = $_POST["title"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$image = $_POST["image"];
	$category = $_POST["category"];
	
	$img_path=NULL;

		
		if(isset($_FILES["file"])&&isset($_FILES["file"]["name"])){

			$temp=explode(".",$_FILES["file"]["name"]);

			$file_name= time().".".end($temp);
			##save picture
			move_uploaded_file($_FILES["file"]["tmp_name"],"../img/$file_name");

			$img_path="images/$file_name";
		


			// unlink("../../".$row->img);

		}
	$db -> query ("INSERT INTO products(title,description,price,image,category) VALUES ('$title','$description','$price','$img_path','$category')");
	// $db -> query ("INSERT INTO products(title,description,price,image,category) VALUES ('sdfhn','descrifdvption','1222','vdfvimg_path','vdfcategory')");

		header("Location: ../../");

?>