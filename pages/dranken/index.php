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

<?php includeDrinksSubMenu(); ?>

<?php includeFooter(); ?>

</body>

</html>