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
				James Bond is a fictional character created by the British journalist and novelist Ian Fleming in 1952.
				The literary character appeared in a series of twelve novels and two short story collections written by
				Fleming and a number of continuation novels and spin-off works after Fleming's death in 1964. There have
				been twenty-seven films in total, produced and released between 1962 and 2021.
			</p>
			<a href="https://en.wikipedia.org/wiki/Portrayal_of_James_Bond_in_film"> Wanna read more?</a>
		</div>
	</div>
	<div class="container-column black">
		<h1>James bond movies Roger Moore acted in</h1>
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
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> /
	<a href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore/James-bond.php">James bond</a>
</div>

<?php includeFooter(); ?>
</body>

</html>