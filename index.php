<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Code-Camp-C2</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>


<div class="wrapper">
	<div class="datum_tijd">
		<iframe src="https://free.timeanddate.com/clock/i89q4uwx/n1297/fn6/fs16/fcfff/tc000/ftb/bas2/bat1/bacfff/pa8/tt0/th1/ta1/tb4" frameborder="0" width="274" height="58"></iframe>
	</div>

	<div class="homeimg">

		<div class="contact">
			<h1>Waar kan je ons vinden.</h1><br>
			<h2>Adres:Koestraat 1<br>
				Plaats:Den Bosch<br>
				Telefoon nummer:0882097521<br>
				Email Adres:iemand@mail.com<br>
			</h2>
			<a target="_blank"
			   href="https://www.google.com/maps/place/Koestraat+1,+5223+AG+'s-Hertogenbosch/@51.697836,5.2876068,15.42z/data=!4m5!3m4!1s0x47c6ee66bc48c005:0x4dddc528356e3d4f!8m2!3d51.6973624!4d5.2935999">
				<img src="<?php echo baseUrl() ?>/public/img/map.png" alt="map">
			</a>


		</div>

	</div>
</div>

<?php includeFooter(); ?>

</body>

</html>