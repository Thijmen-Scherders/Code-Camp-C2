<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Darth Vader</title>
</head>

<body class="yellow">

<?php includeHeader(); ?>

<?php includeFilmSubMenu(); ?>

<div class="wrapper yellow">
	<div class="container black">

		<img src="<?php echo baseUrl() ?>/public/img/darth.jpg" alt="map"/>
		<div class="container-column">
			<h1>Darth Vader</h1>
			<p class="darth">
			Darth Vader is een personage uit de Star Wars-franchise. Het personage is de primaire antagonist in de originele trilogie en is als Anakin Skywalker een primaire protagonist in de prequel-trilogie. Star Wars-bedenker George Lucas heeft gezamenlijk verwezen naar de eerste zes episodische films van de franchise als "de
			tragedie van Darth Vader". [3] Hij is uitgegroeid tot een van de meest iconische schurken in de populaire cultuur, en is
			vermeld onder de grootste schurken en fictieve personages ooit. [4] [5]
			</p>

			<p class="darth">
				Anakin Skywalker, oorspronkelijk een slaaf op Tatooine, is een Jedi die geprofeteerd is om balans te brengen in de Force. Hij
				is
				door Palpatine naar de duistere kant van de Force gelokt en wordt een Sith Lord, die de titel Darth aanneemt
				Vader.
				Na een lichtzwaardgevecht met zijn voormalige mentor Obi-Wan Kenobi op Mustafar, waarin hij zwaar wordt.
				gewond wordt Vader omgetoverd tot een cyborg. Vervolgens dient hij het Galactische Rijk als de belangrijkste handhaver.
				Vader

				verlost zichzelf uiteindelijk door zijn zoon, Luke Skywalker, te redden en Palpatine te doden, waarbij hij zijn eigen zoon opoffert.
				het leven in het proces. [6] Hij is ook de geheime echtgenoot van Padmé Amidala, biologische vader van Prinses.
				Leia
				en grootvader van moederskant van Kylo Ren.
			</p>
		</div>

	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> / <a
			href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Darth.php">Darth Vader</a>
</div>

<?php includeFooter(); ?>
</body>
</html>