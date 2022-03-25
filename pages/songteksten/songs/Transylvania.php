<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Transylvania</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<?php includeSongsSubMenu(); ?>

<div class="wrapper">
	<div class="container-column red">
		<h1>IronMaiden - Transylvania</h1>
		<div class="container song">
			<img src="<?php echo baseUrl() ?>/public/img/Transylvania.png" alt="map"/>
					<p>
					Instrumentaal nummer (Geen zang is hierin te bekennen)
					</p>
		</div>
		<div class="mp3">
			<audio controls>
				<source src="/public/mp3/Transylvania.mp3" type="audio/mpeg">
			</audio>
		</div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songteksten / Overzicht</a> /
	<a href="<?php echo baseUrl() ?>/pages/songteksten/songs/Transylvania.php">Transylvania</a>
</div>

<?php includeFooter(); ?>
</body>

</html>