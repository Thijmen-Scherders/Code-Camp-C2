<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Koude dranken</title>
</head>
<body class="mainpage bg-orange">

<?php includeHeader(); ?>

<?php includeDrinksSubMenu(); ?>

<div class="container-row">
		<div class="container-column koffie bg-grey">
			<h2>Cola</h2>
			<img src="/public/img/cola.jpg" alt="cola" width="300px" height="300px">
			<p>Cola is een koolzuurhoudende frisdrank. Het smaakt zoet (maar is qua pH zuur) en bevat circa 28-32 mg cafeïne per 33 cl. Andere belangrijke ingrediënten zijn vanille, kaneel, karamel en citroen.</p>
			<div class="link-fix">
			<a href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore.php">Roger Moore</a>
			</div>
		</div>
		<div class="container-column latte bg-grey">
			<h2>7-up</h2>
			<img src="/public/img/up.jpg" alt="up" width="300px" height="300px">
			<p>7 Up (of Seven-Up) is een frisdrankmerk van Dr Pepper Snapple Group in de Verenigde Staten en PepsiCo in de rest van de wereld.</p>
		</div>
		<div class="container-column thee bg-grey">
			<h2>Fanta</h2>
			<img src="/public/img/fanta.jpg" alt="sinas" width="300px" height="300px">
			<p>Fanta is een koolzuurhoudende frisdrank van The Coca-Cola Company. Fanta is vooral bekend als een sinaasappeldrank met koolzuur (Fanta Orange), maar er bestaan tal van andere smaken, al dan niet met koolzuur. Te noemen zijn onder andere: Mandarin, Fruit Twist, Lemon, Skwizz, Shokata, Apple, Strawberry en Pink Kiss. </p>
			
		</div>
	</div>
</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/dranken/index.php">Draken</a> /
	<a href="<?php echo baseUrl() ?>/pages/dranken/koudedranken.php">Koude Dranken</a>
</div>

<?php includeFooter(); ?>

</body>
</html>