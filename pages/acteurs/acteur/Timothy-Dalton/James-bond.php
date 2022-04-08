<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Timothy Dalton</title>
</head>
<body class="green">

<?php includeHeader(); ?>


<?php includeFilmSubMenu(); ?>

<div class="wrapper green">
	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/tim.jpg" alt="map"/>
		<div class="container-column black">
			<h1>James Bond (Timothy dalton)</h1>
			<p>
			James Bond is een personage bedacht door de Britse journalist en romanschrijver Ian Fleming in 1952. 
			
			Het literaire personage verscheen in een reeks van twaalf romans en twee verhalenbundels geschreven door Fleming en een aantal vervolgromans en spin-off werken na Flemings dood in 1964. Er zijn in totaal zevenentwintig films geproduceerd en uitgebracht tussen 1962 en 2021
			</p>
			<a href="https://en.wikipedia.org/wiki/Portrayal_of_James_Bond_in_film"> Meer willen weten?</a>
		</div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/Timothy-Dalton/index.php">Acteurs</a> / <a
			href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Timothy-Dalton/James-bond.php">James bond</a>
</div>

<?php includeFooter(); ?>
</body>

</html>