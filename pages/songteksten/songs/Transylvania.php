<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Transylvania</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<?php includeSongMenu(); ?>

<div class="wrapper">
	<div class="container-column red">
		<h1>Ironmaiden - Transylvania</h1>
		<div class="container song">
			<img src="<?php echo baseUrl() ?>/public/img/Transylvania.png" alt="map"/>
					<p>
					Instrumentaal nummer
					</p>
		</div>
		
	</div>
</div>


<?php includeFooter(); ?>
</body>

</html>