	<?php
include "/api/blog/save.php";
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>

	<center><a href="picca.php">Picca</a></center><br>
	<center><a href="sushi.php">Sushi</a></center><br>

<!-- //вызывает функцию -->
	<input type="text" id="search" placeholder="Search" onkeyup="findProducts()">

	<!-- <div id="posts"></div> -->
	
	<form class="admin_form" method="POST" action="api/blog/save.php" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="text" name="title">
		<input type="text" name="description">
		<input type="text" name="price">
		<input type="text" name="category">
		<button type="submit">SAVE</button>
		<!-- <button class="button button-danger" onclick="deleteBlog('+blogs[i].id+')">DELETE</button> -->

	</form>


	
	<div id="products"></div>
	

	<script type="text/javascript" src="js/blog.js"></script>
</body>
</html>