<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Code Camp C2</title>
</head>

<header>

	<div class="menu">
		<a class="logo" href="<?php echo baseUrl() ?>">
			<img class="logo" src="<?php echo baseUrl() ?>/public/img/code-camp.png" alt="company-logo"/>
		</a>
		<div class="menu-links">
			<a href="<?php echo baseUrl() ?>/pages/dranken/index.php">Dranken</a>
			<a href="<?php echo baseUrl() ?>/pages/songteksten/index.php"> Songteksten</a>
			<a href="<?php echo baseUrl() ?>/pages/gereedschap/index.php">Gereedschapen</a>
			<a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a>
			<a href="<?php echo baseUrl() ?>/pages/boeken/index.php">Boeken</a>
			<a href="<?php echo baseUrl() ?>/pages/chatapp/index.php">Help...</a>
		</div>
	</div>

</header>
