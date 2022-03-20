<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Boeken</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container">
		<a href="#">Item</a>
	</div>
	<h2>Het boek is een veelgebruikte manier om informatie vast te leggen 
		in de vorm van tekst en afbeeldingen en om deze informatie weer te 
		geven, op te slaan en te verspreiden. Het is een document van vaak 
		niet al te kleine omvang. Een boek in traditionele zin is een 
		samengevoegde hoeveelheid papier met tekst, afbeeldingen of allebei. 
		Daarnaast wordt met de term de betreffende informatie, of een 
		soortgelijke verzameling informatie, aangeduid ('een boek schrijven', 
		'een boek downloaden'). Het woord 'boek' is vermoedelijk afkomstig van 
		het Germaanse woord voor beuk, boche. De omslagen van de eerste boeken 
		werden namelijk gemaakt van een rechthoekig stuk (beuken)hout. Het 
		Griekse woord biblia (boeken) is het meervoud van biblion dat 
		oorspronkelijk 'papyrusje' betekende, het materiaal waarop in de 
		oudheid meestal werd geschreven, en later werd gebruikt als aanduiding 
		van papier, geschrift en boek(rol).</h2>
</div>

<?php includeFooter(); ?>

</body>

</html>