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
	
	<div class="container">
		<a href="#">Item</a>
	</div>
	<button><a href="<?php echo baseUrl() ?>/subpages/kettingzagen/index.php">kettingzagen</a></button>
</div>

<?php includeFooter(); ?>

</body>

</html>