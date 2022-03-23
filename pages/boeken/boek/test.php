<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Boeken</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeBooksSubMenu(); ?>

<div class="wrapper">
	<div class="container-column black">
		<h1>Boeken</h1>
		<p>
			Dit is een boek.
		</p>
	</div>
</div>

<?php includeFooter(); ?>

</body>

</html>