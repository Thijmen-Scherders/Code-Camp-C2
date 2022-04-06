<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Sir Roger George Moore</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>


<?php includeFilmSubMenu(); ?>

<div class="wrapper">
	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/bondroger.jpg" alt="map"/>
		<div class="container-column black">
			<h1>James Bond (Roger Moore)</h1>
			<p>
			James Bond is een personage bedacht door de Britse journalist en romanschrijver Ian Fleming in 1952. Het literaire personage verscheen in een reeks van twaalf romans en twee verhalenbundels geschreven door Fleming en een aantal vervolgromans en spin-off werken na Flemings dood in 1964. Er zijn in totaal zevenentwintig films geproduceerd en uitgebracht tussen 1962 en 2021.
			</p>
			<a href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore/Roger-Moore.php">Meer te weten willen komen over Roger Moore?</a>
		</div>

	
	</div>
	<div class="container-column black">
		<h1>James bond movies Roger Moore acted in</h1>
		<a href="https://nl.wikipedia.org/wiki/Live_and_Let_Die_(film)">Live and Let Die: 1973</a>
		<a href="https://nl.wikipedia.org/wiki/The_Man_with_the_Golden_Gun">The Man with the Golden Gun: 1974</a>
		<a href="https://nl.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">The Spy Who Loved Me: 1977</a>
		<a href="https://nl.wikipedia.org/wiki/Moonraker_(film)">Moonraker: 1979</a>
		<a href="https://nl.wikipedia.org/wiki/For_Your_Eyes_Only_(film)">For your eyes only: 1981</a>
		<a href="https://nl.wikipedia.org/wiki/Octopussy">Octopussy: 1983</a>
		<a href="https://nl.wikipedia.org/wiki/A_View_to_a_Kill">A view to a kill: 1985</a>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> /
	<a href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore/James-bond.php">James bond</a>
</div>

<?php includeFooter(); ?>
</body>

</html>