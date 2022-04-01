<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
	<div class="container black">
		<a href="<?php echo baseUrl(); ?>/pages/acteurs/land2.php">Acteurs</a>
		<a href="<?php echo baseUrl(); ?>/pages/acteurs/land.php">Film Personages</a>
	</div>
</div>