<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>schroevendraaiers</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeToolsSubMenu(); ?>

<div class="schroevendraaier">
	<h1>schroevendraaiers</h1>

	<div class="container-column">

		<p>Een schroevendraaier is een stuk gereedschap waarmee schroeven worden aangebracht en verwijderd. Het bestaat
			uit
			een handvat met een metalen steel waarvan het uiteinde zo gevormd is dat het in de kop van een schroef past.
			Schroevendraaiers zijn in velerlei soorten, afmetingen en kwaliteiten verkrijgbaar. Er bestaan
			schroevendraaiers
			met een platte punt, alsook met een ster- of kruiskop.
		</p>

		<p>
			Goede schroevendraaiers zijn vervaardigd van speciale
			staalsoorten. Bij een juiste toepassing zijn ze praktisch onbreekbaar. Het heft van een schroevendraaier
			wordt
			meestal gemaakt van een slagvaste, onbreekbare kunststof. Soms vervaardigt men het heft nog van een taaie
			houtsoort. De grootte van schroevendraaier en schroef dienen bij elkaar te 'passen'.
		</p>

	</div>


	<div class="order1">
		<img src="/public/img/sleuf.jpg" alt="sleufkopschroevendraaier">
		<h2>sleufkopschroevendraaier (plat);</h2>
		<img src="/public/img/phillip.jpg" alt="phillipsschroevendraaier">
		<h2>phillipsschroevendraaier PH (kruiskop zonder verdere markering);</h2>
		<img src="/public/img/pozid.jpg" alt="pozidrivschroevendraaier">
		<h2>pozidrivschroevendraaier PZ (kruiskop met extra sterretje).</h2>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/gereedschap/index.php">Gereedschap</a> / <a
			href="<?php echo baseUrl() ?>/pages/gereedschap/tool/schroevendraaiers.php">Schroevendraaiers</a>
</div>

<?php includeFooter(); ?>

</body>

</html>