<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Code Camp C2</title>
</head> 
<header>
    <div class="logo">   <a href="/"><img src="<?php echo baseUrl() ?>/public/code-camp.png" alt="logo" width='150px' height="150px"></a></div>
<div class="links">


    <div class="demo">
        <button><a href="<?php echo baseUrl() ?>/pages/dranken/dranken.php">Dranken</a></button>
        <button><a href="<?php echo baseUrl() ?>/pages/songteksten/songteksten.php"> Songteksten</a> </button>
        <button><a href="<?php echo baseUrl() ?>/pages/gereedschap/Gereedschap.php">Gereedschap</a></button>
        <button><a href="<?php echo baseUrl() ?>/pages/acteurs/acteurs.php">Acteurs</a></button>
        <button><a href="<?php echo baseUrl() ?>/pages/boeken/boeken.php">Boeken</a></button>   
    </div>
</div>
</header>
