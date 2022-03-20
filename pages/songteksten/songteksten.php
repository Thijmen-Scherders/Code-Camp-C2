<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>public/stylesheet.css">
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container">
	 <a href="songs/PlugInBaby.php">Plug in baby</a>
	 <a href="songsqueen.php">Bohemian Rhapsody</a>
	</div>
</div>


<?php includeFooter(); ?>
</body>

</html>