<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Film Personages</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeActeurSubMenu(); ?>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a>
</div>

<?php includeFooter(); ?>

</body>

</html>