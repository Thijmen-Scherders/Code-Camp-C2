<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<div class="wrapper">
	<div class="container black">
		<a href="<?php echo baseUrl()?>/pages/boeken/boek/test.php">Test</a>
	</div>
</div>