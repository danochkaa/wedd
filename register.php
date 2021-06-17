<?php 

include "db.php";
session_start();
$query=$db->query("SELECT * FROM  products");


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wedd.kz</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="style/all.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="index.php"><img src="img/logo.jpg" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="#">Рестораны</a></li>
						<li><a href="#">Свадебные салоны</a></li>
						<li><a href="#">Ведущие</a></li>
						<li><a href="#">Кейтеринг</a></li>
						<li><a href="#">о нас</a></li>
					</ul>
					<a href="login.php" class="login_btn">Вход</a>
				</nav>
			</div>
		</header>

	<div class="signin_inputs" style="color: white">
					<form method="POST" action="api/auth/signup.php">
					<label>Логин</label>
					<input type="text" name="login" placeholder="Логин" required>
					<label>Полное имя</label>
					<input type="text" name="full_name" placeholder="Полное имя" required>
					<label>Пароль</label>
					<input type="password" name="password" placeholder="Пароль" required>
					<label>Пароль еще раз</label>
					<input type="password" name="password2" placeholder="Пароль еще" required>
					<button type="submit" name="do_signup">Ок</button>
					</form>
				</div>
		<a href="login.php">Вход</a></button>


	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Mansions</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="about">
					
					<ul>
						<li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			KOlaakkskdjdj <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">vgggggg</a>. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>