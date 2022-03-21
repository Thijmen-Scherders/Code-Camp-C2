<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container-column red">
		<h1>Ironmaiden - Transylvania</h1>
		<p> 
			Insturmentaal nummer
		</p> 
		<img src="<?php echo baseUrl() ?>/public/Transylvania.png" alt="map"/>
	</div>
</div>


<?php includeFooter(); ?>
</body>

</html>