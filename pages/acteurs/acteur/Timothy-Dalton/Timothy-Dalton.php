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
	<title>Timothy Leonard Dalton Leggett</title>
</head>


<body class="green">

<?php includeHeader(); ?>

<?php includeActeurSubMenu(); ?>

<div class="wrapper green">
	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/timothy.png" alt="map"/>
		<div class="container-column">
			<h1>Timothy Leonard Dalton Leggett</h1>
			<p>
				Timothy Leonard Dalton Leggett is an English actor. Beginning his career on stage, he made his film
				debut as Philip II of France in the 1968 historical drama The Lion in Winter. He gained international
				prominence as the fourth actor to portray fictional secret agent James Bond in the Eon Productions film
				series, where he starred in The Living Daylights (1987) and Licence to Kill (1989). Dalton has also
				appeared in the films Flash Gordon (1980), The Rocketeer (1991), Looney Tunes: Back in Action (2003),
				Hot Fuzz (2007), Toy Story 3 (2010) and The Tourist (2010).
			</p>
			<a href="https://en.wikipedia.org/wiki/Timothy_Dalton"> Meer willen weten?</a>
		</div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> / <a
			href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Timothy-Dalton/Timothy-Dalton.php">Timothy Dalton</a>
</div>

<?php includeFooter(); ?>
</body>

</html>