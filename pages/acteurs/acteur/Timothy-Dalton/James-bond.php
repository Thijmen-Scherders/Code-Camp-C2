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
				James Bond is a fictional character created by the British journalist and novelist Ian Fleming in 1952.
				The literary character appeared in a series of twelve novels and two short story collections written by
				Fleming and a number of continuation novels and spin-off works after Fleming's death in 1964. There have
				been twenty-seven films in total, produced and released between 1962 and 2021.
			</p>
			<a href="https://en.wikipedia.org/wiki/Portrayal_of_James_Bond_in_film"> Wanna read more?</a>
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