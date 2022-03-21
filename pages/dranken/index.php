<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Dranken</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container black">
		<a href="koudedranken.php">Koude dranken</a>
		<a href="warmedranken.php">Warme Dranken</a>
	</div>
</div>

<?php includeFooter(); ?>

</body>

</html>