<?php
	
	if(isset($_GET["id"])&&strlen($_GET["id"])>0){

		include "php/db.php";
		$query = $db->query("SELECT * FROM products WHERE id=".$_GET["id"]);

		if($query->num_rows>0){
			$row = $query->fetch_object();

			?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="api/blog/edit.php">
		<input type="text" name="name" value="<?php
		echo $row->name; ?>">	
		<input type="text" name="text" value="<?php
		echo $row->text; ?>">
		<input type="hidden" name="id" value="<?php
		echo $row->id; ?>" >
		<button>Сохранить</button>
	</form>
</body>
</html>


			<?php
		}

	}


?>