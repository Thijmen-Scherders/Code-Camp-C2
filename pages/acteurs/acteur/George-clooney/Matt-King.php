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
	<title>George Clooney</title>
</head>


<body class="">

<?php includeHeader(); ?>

<?php includeFilmSubMenu(); ?>

<div class="wrapper">
	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/matt.png" alt="map"/>
		<div class="container-column">
			<h1>Matthew King</h1>
			<p>
			Matthew Thomas King was de tweede zoon van Tom en Mary King. Hij was de meest eigengereide en manipulatieve van de vier King-broers. Tijdens zijn tijd in Emmerdale had Matthew relaties met verschillende vrouwen en was hij verloofd met Anna De Souza toen hij stierf.
			</p>
			<a href="https://emmerdale.fandom.com/wiki/Matthew_King"> Wanna read more?</a>
		</div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> / <a
			href="<?php echo baseUrl() ?>/pages/acteurs/acteur/George-clooney/Matt-King.php">Matt King</a>
</div>

<?php includeFooter(); ?>
</body>

</html>