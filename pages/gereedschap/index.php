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

<?php includeToolsSubMenu() ?>

<?php includeFooter(); ?>

</body>

</html>