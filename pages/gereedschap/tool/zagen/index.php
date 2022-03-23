<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>kettingzagen</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeZagenSubMenu(); ?>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/gereedschap/index.php">Gereedschap</a> /
	<a href="<?php echo baseUrl() ?>/pages/gereedschap/tool/zagen/index.php">Zagen</a> /
	<a href="<?php echo baseUrl() ?>/pages/gereedschap/tool/hamers.php">Overzicht</a>
</div>

<?php includeFooter(); ?>

</body>

</html>