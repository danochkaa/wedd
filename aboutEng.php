<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Доставка пиццы и суши</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style/all.css">
		<style>
		body{
			background-image: url(fon.jpg);
				 padding-top: 70px; 
		}
	</style>
	
	 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="bootstrap/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="bootstrap/css/style.css" rel="stylesheet">

	</head>
	<body>	
		<div class="fon">
		<header class="header">
			<div class="header__logo">
			<nav clas="navbar navbar-default">
			<nav class="nav navbar navbar-default fixed-top  navbar-expand-lg scrolling-navbar white">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
					
				</button>
				<div class="nav__link"><a href="index.php">Menu</a></div>
				<div class="nav__link"><a href="picca.php">Pizza</a></div>
				<div class="nav__link"><a href="sushi.php">Sushi</a></div>
				<div class="nav__link"><a href="about.php">About us</a></div>
				<div class="nav__link nav__link_last"><a href="#">Sales<img src="images/1.png"/></a></div>
				

		<ul class="navbar-nav nav-flex-icons"><li class="nav-item mr-2">
		<a href="tel:+7  778 600 00 09">+7  778 600 00 09</a>
		<p>ул. Бокейханова, 31</p></li></ul>
		<a href="about.php">Ru</a>
		
			</nav>

			<div class="header__menu" onclick="toggleAside('open')">Menu</div>
			
		</header>

		<section class="aside" id="aside">
			<div class="aside__link">Menu</div>
			<div class="aside__link">Pizza</div>
			<div class="aside__link">Sushi</div>
			<div class="aside__link">About us</div>
			<div class="aside__link">Sales</div>
			<div class="aside__link" onclick="toggleAside('close')">Close</div>
		</section>
		<div class="header__logo">
			<img src="images/logo.png" alt="logo">
		<div>Delivery pizza and sushi</div>
	<div class="title3">
		<div><a href="cart.php">Cart: 0</a><br/>
		<div id="add-student"><button class="button button-primary" style="background-color: #fff; color: #000; font-size: 20px;">Вход</button></div></div></div></div>
			
			<div class="block-2">
				<div class="red">
					<div class="s1">About us</div>
				</div>
					<div class="block-2-list">
						<p>Beta pizza was born with the idea of providing customers with traditional Italian pizza, which is prepared quickly and efficiently on a live fire in a professional wood-fired oven “Alfa pizza”. We offer you pizza made from the highest quality ingredients.</p>
					</div>
				</div>

<br><br><br><br><br>
<hr/>
		<footer class="footer">

			<div class="column">
				<h3>Products</h3>
				<a href="" class="column">Pizza</a><br><br>
				<a href="" class="column">Sushi</a><br><br>
				<a href="" class="column">Drinks</a><br><br>
				
					<p>Подписывайтесь на нас<br/>
					в соцсетях</p>
					<div class="foot">
					<p> Всегда свежие и качественные <br/> ингредиенты!</p>
					<img src="images/foot.png" alt="">
				</div>
			</div>
<a href="https://www.instagram.com/betapizza_almaty/" target="_blank"><img src="/uploads/1524902898837579.png" alt=""></a>
<img src="/uploads/1524902898837579.png" alt=""/>


</footer>
	<div id="modal-add" class="modal">
		<div class="modal-backdrop" onclick="hideModal()"></div>
		<div class="modal-inner">
			<span class="modal-close" onclick="hideModal()">Вход</span>
			<br/>
			<h1 class="modal-title">Введите логин и пароль</h1><br/>
			<form onsubmit="addStudent(event)">
				<fieldset class="form-field">
					<label>Логин</label>
					<input id="student_id" type="text">
				</fieldset><br/>
				<fieldset class="form-field">
					<label>Пароль</label>
					<input id="student_name" type="text">
				</fieldset>
				
				<fieldset class="form-field">
					<button class="button button-primary">Save</button>
				</fieldset>

			
			</form>
		</div>

			</div>
			
</div>
</div>
		<script src="js/aside.js"></script>
		<script src="js/modal.js"></script>
		<script src="js/list.js"></script>
		<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
	</body>
</html>