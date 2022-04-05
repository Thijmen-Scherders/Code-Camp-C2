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


<?php includeActeurSubMenu(); ?>

<div class="wrapper">
	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/rogermoore.jpg" alt="map"/>
		<div class="container-column black">
			<h1>Sir Roger George Moore</h1>
			<p>
				Sir Roger George Moore KBE (14 October 1927 – 23 May 2017) was an English actor. He was the third actor
				to portray the fictional British secret agent James Bond in the Eon Productions film series, playing the
				character in seven feature films between 1973 and 1985. Moore's seven appearances as Bond, from Live and
				Let Die to A View to a Kill, are the most of any actor in the Eon-produced entries.
			</p>
			<a href="https://en.wikipedia.org/wiki/Roger_Moore"> Wanna read more? </a>
		</div>
	</div>


	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/live.jpg" alt="map"/>
		<div class="container-column black">
			<h1>Live and Let Die: 1973</h1>
			<p>
			Live and Let Die is een spionagefilm uit 1973. Het was de achtste film in de James Bond-serie geproduceerd door Eon Productions, en de eerste met Roger Moore als de fictieve MI6-agent James Bond. 
			</p>
			<a href="https://en.wikipedia.org/wiki/Live_and_Let_Die_(film)">Wanna read more?</a>
			
		</div>
	</div>

	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/golden.jpg" alt="map"/>
		<div class="container-column black">
			<h1>The Man with the Golden Gun: 1974</h1>
			<p>
			is de negende James Bondfilm geproduceerd door EON Productions, met Roger Moore als James Bond. De film is uitgebracht in 1974. Hij is gebaseerd op het gelijknamige boek uit 1965. De film speelt zich af tegen de achtergrond van de oliecrisis van 1973. 
			</p>
			<a href="https://en.wikipedia.org/wiki/The_Man_with_the_Golden_Gun_(film)">Wanna read more?</a>
			
		</div>
	</div>

	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/spy.jpg" alt="map"/>
		<div class="container-column black">
			<h1>The Spy Who Loved Me: 1977</h1>
			<p>
			is een Britse spionagefilm uit 1977, de tiende in de James Bond-serie geproduceerd door Eon Productions. Het is de derde met Roger Moore als de fictieve geheim agent James Bond. De hoofdrollen worden vertolkt door Barbara Bach en Curt Jürgens. Het scenario was van Christopher Wood en Richard Maibaum, met een niet-gecrediteerde herschrijving door Tom Mankiewicz. 
			</p>
			<a href="https://en.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">Wanna read more?</a>
			
		</div>
	</div>

	


	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/moon.jpg" alt="map"/>
		<div class="container-column black">
			<h1>Moonraker: 1979</h1>
			<p>
			is het derde James Bondboek geschreven in 1955 door Ian Fleming. In 1979 werd het boek verfilmd door EON Productions. De rol van James Bond werd vertolkt door Roger Moore en de film werd geregisseerd door Lewis Gilbert. Omdat sciencefictionfilms zeer succesvol bleken te zijn, ging Bond in deze film naar de ruimte terwijl in het originele boek Bond gewoon op de aarde blijft.
			</p>
			<a href="https://en.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">Wanna read more?</a>
			
		</div>
	</div>


	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/eye.jpg" alt="map"/>
		<div class="container-column black">
			<h1>For your eyes only: 1981</h1>
			<p>
			is een Britse spionagefilm uit 1977, de tiende in de James Bond-serie geproduceerd door Eon Productions. Het is de derde met Roger Moore als de fictieve geheim agent James Bond. De hoofdrollen worden vertolkt door Barbara Bach en Curt Jürgens. Het scenario was van Christopher Wood en Richard Maibaum, met een niet-gecrediteerde herschrijving door Tom Mankiewicz. 
			</p>
			<a href="https://en.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">Wanna read more?</a>
			
		</div>
	</div>

	<div class="container-column black">
		<h1>James bond movies Roger More acted in</h1>
		<a href="https://en.wikipedia.org/wiki/Live_and_Let_Die_(film)">Live and Let Die: 1973</a>
		<a href="https://en.wikipedia.org/wiki/The_Man_with_the_Golden_Gun_(film)">The Man with the Golden Gun: 1974</a>
		<a href="https://en.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">The Spy Who Loved Me: 1977</a>
		<a href="https://en.wikipedia.org/wiki/Moonraker_(film)">Moonraker: 1979</a>
		<a href="https://en.wikipedia.org/wiki/For_Your_Eyes_Only_(film)">For your eyes only: 1981</a>
		<a href="https://en.wikipedia.org/wiki/Octopussy">Octopussy: 1983</a>
		<a href="https://en.wikipedia.org/wiki/A_View_to_a_Kill">A view to a kill: 1985</a>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> / <a
			href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore/Roger-Moore.php">Roger Moore</a>
</div>

<?php includeFooter(); ?>
</body>

</html>