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
			<a href="https://en.wikipedia.org/wiki/Roger_Moore"> Meer wilen weten? </a>
		</div>
	</div>

	<div class="p">
			<h1>Dit Zijn de Films Waar Roger Moore James Bond in Speelde</h1>
	</div>


	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/live.jpg" alt="map"/>
		<div class="container-column black">
			<h1>Live and Let Die: 1973</h1>
			<p>
			Live and Let Die is een spionagefilm uit 1973. 
			Het was de achtste film in de James Bond-serie geproduceerd door Eon Productions, en de eerste met Roger Moore als de fictieve MI6-agent James Bond. 
			</p>
			<a href="https://en.wikipedia.org/wiki/Live_and_Let_Die_(film)">Meer willen weten?</a>
			
		</div>
	</div>

	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/golden.jpg" alt="map"/>
		<div class="container-column black">
			<h1>The Man with the Golden Gun: 1974</h1>
			<p>
			is de negende James Bondfilm geproduceerd door EON Productions, met Roger Moore als James Bond. 
			De film is uitgebracht in 1974. Hij is gebaseerd op het gelijknamige boek uit 1965. 
			De film speelt zich af tegen de achtergrond van de oliecrisis van 1973. 
			</p>
			<a href="https://en.wikipedia.org/wiki/The_Man_with_the_Golden_Gun_(film)">Meer willen weten?</a>
			
		</div>
	</div>

	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/spy.jpg" alt="map"/>
		<div class="container-column black">
			<h1>The Spy Who Loved Me: 1977</h1>
			<p>
			is een Britse spionagefilm uit 1977, de tiende in de James Bond-serie geproduceerd door Eon Productions. 
			Het is de derde met Roger Moore als de fictieve geheim agent James Bond. De hoofdrollen worden vertolkt door Barbara Bach en Curt Jürgens.
			 Het scenario was van Christopher Wood en Richard Maibaum, met een niet-gecrediteerde herschrijving door Tom Mankiewicz. 
			</p>
			<a href="https://en.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">Meer willen weten?</a>
			
		</div>
	</div>

	


	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/moon.jpg" alt="map"/>
		<div class="container-column black">
			<h1>Moonraker: 1979</h1>
			<p>
			is het derde James Bondboek geschreven in 1955 door Ian Fleming. 
			In 1979 werd het boek verfilmd door EON Productions. De rol van James Bond werd vertolkt door Roger Moore en de film werd geregisseerd door Lewis Gilbert. 
			Omdat sciencefictionfilms zeer succesvol bleken te zijn, ging Bond in deze film naar de ruimte terwijl in het originele boek Bond gewoon op de aarde blijft.
			</p>
			<a href="https://en.wikipedia.org/wiki/Moonraker_(film)">Meer willen weten?</a>
			
		</div>
	</div>


	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/eye.jpg" alt="map"/>
		<div class="container-column black">
			<h1>For your eyes only: 1981</h1>
			<p>
			is een Britse spionagefilm uit 1981 onder regie van John Glen. 
			De hoofdrollen worden vertolkt door Roger Moore als de fictieve MI6-agent James Bond en de hoofdrollen worden vertolkt door Carole Bouquet, Chaim Topol, Lynn-Holly Johnson en Julian Glover.
			</p>
			<a href="https://en.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">Meer willen weten?</a>
			
		</div>
	</div>


	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/octo.jpg" alt="map"/>
		<div class="container-column black">
			<h1>Octopussy: 1983</h1>
			<p>
			is een Britse spionagefilm uit 1983 en de dertiende in de James Bond-serie geproduceerd door Eon Productions; de zesde met Roger Moore als de fictieve MI6-agent James Bond. 
			De film werd geregisseerd door John Glen en het scenario werd geschreven door George MacDonald Fraser, Richard Maibaum en Michael G. Wilson.
			</p>
			<a href="https://en.wikipedia.org/wiki/Octopussy">Meer willen weten?</a>
			
		</div>
	</div>


	
	<div class="container black">
		<img src="<?php echo baseUrl() ?>/public/img/view.jpg" alt="map"/>
		<div class="container-column black">
			<h1>A view to a kill: 1985</h1>
			<p>
			is een spionagefilm uit 1985 en de veertiende in de James Bond-serie geproduceerd door Eon Productions, en is de zevende en laatste verschijning van Roger Moore als de fictieve MI6-agent James Bond. 
			Hoewel de titel is aangepast van Ian Fleming's korte verhaal "From a View to a Kill" uit 1960, heeft de film een volledig origineel scenario. 
			In A View to a Kill neemt Bond het op tegen Max Zorin (gespeeld door Christopher Walken), die van plan is silicon valley in Californië te vernietigen.
			</p>
			<a href="https://en.wikipedia.org/wiki/A_View_to_a_Kill">Meer willen weten?</a>
			
		</div>
	</div>



<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> / <a
			href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore/Roger-Moore.php">Roger Moore</a>
</div>

<?php includeFooter(); ?>
</body>

</html>