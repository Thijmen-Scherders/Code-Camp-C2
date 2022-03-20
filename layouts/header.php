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
	<div class="logo">
		<a href="/"><img src="<?php echo baseUrl() ?>/public/code-camp.png" alt="logo" width='150px' height="150px"></a>
	</div>
	<div class="links">

		<div class="demo">
			<button><a href="<?php echo baseUrl() ?>/pages/dranken/index.php">Dranken</a></button>
			<button><a href="<?php echo baseUrl() ?>/pages/songteksten/index.php"> Songteksten</a></button>
			<button><a href="<?php echo baseUrl() ?>/pages/gereedschap/index.php">Gereedschap</a></button>
			<button><a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a></button>
			<button><a href="<?php echo baseUrl() ?>/pages/boeken/index.php">Boeken</a></button>
		</div>

	</div>
</header>
