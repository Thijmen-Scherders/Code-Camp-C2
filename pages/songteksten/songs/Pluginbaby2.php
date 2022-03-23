<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Plug In Baby</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<?php includeSongsSubMenu(); ?>

<div class="wrapper">
	<div class="container-column red">
		<h1>Muse - Plug in baby</h1>
		<div class="container song">
			<img src="<?php echo baseUrl() ?>/public/img/PlugInBaby.png" alt="map"/>
			<div class="container-column song">
				<p>
					I've exposed your lies
					Baby
					The underneath's no big surprise
					Now it's time for changing
					And cleansing everything to forget your love
				</p>
				<p>
					My plug in baby
					Crucifies my enemies
					When I'm tired of giving
					My plug in baby
					In unbroken virgin realities
					Is tired of living
				</p>
				<p>
					Don't confuse
					Baby your gonna lose
					Your own game
					Change me
					Replace the envying
					To forget your love
				</p>
				<p>
					My plug in baby
					Crucifies my enemies
					When I'm tired of giving
					My plug in baby
					In unbroken virgin realities
					Is tired of living
				</p>
				<p>
					And I've seen your loving
					Mine is gone
				</p>
				<p>
					And I've been in trouble
					wooaahhhh
				</p>
			</div>
		</div>
	</div>
</div>


<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songteksten / Overzicht</a> /
	<a href="<?php echo baseUrl() ?>/pages/songteksten/songs/Pluginbaby2.php">Plug In Baby (red)</a>
</div>

<?php includeFooter(); ?>
</body>

</html>