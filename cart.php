<?php 

include "db.php";
if (isset($_GET["id"])&&strlen($_GET["id"])) {
	$user_id=$_GET["id"];

session_start();
$query=$db->query("SELECT * FROM cart c LEFT OUTER JOIN products p ON c.p_id=p.id WHERE c.user_id=$user_id");
$price=$db->query("SELECT sum(p.price) as totalprice FROM cart c LEFT OUTER JOIN products p ON c.p_id=p.id WHERE c.user_id=$user_id");
$row1=$price->fetch_object();
$total=ceil($row1->totalprice);


 ?>
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
				<div class="nav__link"><a href="index.php">Главная</a></div>
				<div class="nav__link"><a href="picca.php">Пицца</a></div>
				<div class="nav__link"><a href="sushi.php">Суши</a></div>
				<div class="nav__link"><a href="about.php">О компании</a></div>
				<div class="nav__link nav__link_last"><a href="#">Акции<img src="images/1.png"/></a></div>
				

		<ul class="navbar-nav nav-flex-icons"><li class="nav-item mr-2">
		<a href="tel:+7  778 600 00 09">+7  778 600 00 09</a>
		<p>ул. Бокейханова, 31</p></li></ul>
		
			</nav>

			<div class="header__menu" onclick="toggleAside('open')">Menu</div>
			
		</header>

		<section class="aside" id="aside">
			<div class="aside__link">Главная</div>
			<div class="aside__link">Пицца</div>
			<div class="aside__link">Суши</div>
			<div class="aside__link">О компании</div>
			<div class="aside__link">Акции</div>
			<div class="aside__link" onclick="toggleAside('close')">Close</div>
		</section>
		<div class="header__logo">
			<img src="images/logo.png" alt="logo">
		<div>Доставка пиццы и суши в Алматы</div>
	<div class="title3">
		<div><a href="">В корзине: 0</a><br/>
		<div id="add-student"><button class="button button-primary" style="background-color: #fff; color: #000; font-size: 20px;">Вход</button></div></div></div></div>
			
			<div class="cart">
				<div class="content">
					<div class="green">
						<div class="c1"><a href="">Ваша корзина</a></div>
						<div class="c2"><a href="">Закажите еще что-нибудь</a></div>
					</div>
					<div class="table">
						<table>
							<tr>
								<th>Блюдо</th>
								<th>Цена</th>
								<th>Удалить</th>
							</tr>
<?php if ($query->num_rows>0) {
	while($row=$query->fetch_object()){	
	?>
                         <tr>
                         	<td><img src="<?php echo $row->image; ?>" alt=""> &nbsp;&nbsp; <?php echo $row->title; ?></td>
                           <td><?php echo $row->price; ?></td>
                        <td><a href="api/blog/delete.php?p_id=<?php echo$row->id; ?>&user_id=<?php echo $_SESSION['id'] ?>">Удалить</a></td>

                         </tr>

<?php }} ?>

						</table>
					</div>
				<div class="zakaz">
					<div class="pokaz"></div>
					<div class="pokupka">
						<div class="c4">
						<b>Сумма к оплате</b>
						<span class="cena"><?php echo $total; ?> тг</span>
						</div>
						<button class="btn" class="button_c">Оформить заказ</button>
					</div>
				</div>
				</div>

				
			</div>


<br><br><br><br><br>
<hr/>
		<footer class="footer">

			<div class="column">
				<h3>Продукты</h3>
				<a href="" class="column">Пицца</a><br><br>
				<a href="" class="column">Суши</a><br><br>
				<a href="" class="column">Напитки</a><br><br>
				
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
<?php } ?>