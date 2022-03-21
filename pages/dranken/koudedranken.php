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
<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container orange">
		<div class="wrapperfris">
			<div class="container1">
			<h1>Cola</h1>
				<div class="container">
					<img src="/public/img/cola.jpg" alt="cola" width="300px" height="300px">
					<div class="container-column">
						<p> Cola is een koolzuurhoudende frisdrank. Het smaakt zoet (maar is qua pH zuur) en bevat circa 28-32 mg cafeïne per 33 cl. Andere belangrijke ingrediënten zijn vanille, kaneel, karamel en citroen</p>
						<p>Anders dan de meeste frisdranken bevat het geen citroenzuur, maar fosforzuur. Dieetcola bevat zowel fosforzuur als citroenzuur. Er bestaan naast suikervrije ook cafeïnevrije colavarianten.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<a href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore.php">Roger Moore</a>
			</div>

			<div class="container1">
				<h1>7-Up</h1>

				<div class="container">
					<img src="/public/img/up.jpg" alt="up" width="300px" height="300px">
					<p>Up (of Seven-Up) is een frisdrankmerk van Dr Pepper Snapple Group in de Verenigde Staten en PepsiCo in de rest van de wereld</p>
				</div>
			</div>
			<div class="container1">
			<h1>Fanta</h1>

				<div class="container">
					<img src="/public/img/fanta.jpg" alt="sinas" width="300px" height="300px">
					<p>Fanta is in Nederland de benaming voor de doorgaans gele of oranje, meestal koolzuurhoudende frisdrank met sinaasappelsmaak. Zoals de meeste frisdranken bevat sinas veel suiker of in de light-versie kunstmatige zoetstoffen.</p>
				</div>
			</div>

		</div>
</div>
</div>

<?php includeFooter(); ?>

</body>
</html>