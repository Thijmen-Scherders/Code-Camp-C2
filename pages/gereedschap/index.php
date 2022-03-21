<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Gereedschap</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	
	<div class="container black">
		<a href="zagen/kettingzagen/index.php">Kettingzagen</a>
		<a href="zagen/cirkelzagen/index.php">Cirkelzagen</a>
		<a href="hamers/index.php">Hamers</a>
	</div>
</div>

<?php includeFooter(); ?>

</body>

</html>