<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Songteksten</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container">
		<a href="songs/PlugInBaby.php">Plug in baby</a>
		<a href="songs/PlugInBaby2.php">Plug in baby (red)</a>
		<a href="songs/queen.php">Bohemian Rhapsody</a>
		<a href="songs/Transylvania.php">Transylvania</a>
		<a href="songs/Uprising-Muse.php">Uprising - Muse</a>
		<a href="songs/Uprising-MyBaby.php">Uprising - My Baby</a>
		<a href="songs/Madness.php">Madness</a>
		<a href="songs/Killer_Queen.php">Killer Queen</a>
		<a href="songs/Wearethechampions.php">We are the champions</a>
	</div>
</div>

<?php includeFooter(); ?>

</body>

</html>