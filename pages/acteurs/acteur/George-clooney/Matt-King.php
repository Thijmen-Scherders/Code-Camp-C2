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
				Matthew Thomas King was the second son of Tom and Mary King. He was the most headstrong and manipulative
				of the four King brothers.

				During his time in Emmerdale, Matthew had relationships with several women and was engaged to Anna De
				Souza when he died.
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