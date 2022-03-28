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


<?php includeRogerSubMenu(); ?>

<div class="wrapper">
    <div class="container black">
        <img src="<?php echo baseUrl() ?>/public/img/rogermoore.jpg" alt="map"/>
        <div class="container-column black">
            <h1>Sir Roger George Moore</h1>
            <p> 
            Sir Roger George Moore KBE (14 October 1927 – 23 May 2017) was an English actor. He was the third actor to portray the fictional British secret agent James Bond in the Eon Productions film series, playing the character in seven feature films between 1973 and 1985. Moore's seven appearances as Bond, from Live and Let Die to A View to a Kill, are the most of any actor in the Eon-produced entries.
            </p> 
            <a href="https://en.wikipedia.org/wiki/Roger_Moore"> read more...</a>
        </div>
    </div>
    <div class="container-column black">
        <h1>James bond movies Roger More acted in</h1>
        <a href="https://en.wikipedia.org/wiki/Live_and_Let_Die_(film)">Live and Let Die	                1973</a>
        <a href="https://en.wikipedia.org/wiki/The_Man_with_the_Golden_Gun_(film)">The Man with the Golden Gun	    1974</a>
        <a href="https://en.wikipedia.org/wiki/The_Spy_Who_Loved_Me_(film)">The Spy Who Loved Me	            1977</a>
        <a href="https://en.wikipedia.org/wiki/Moonraker_(film)">Moonraker	                    1979</a>
        <a href="https://en.wikipedia.org/wiki/For_Your_Eyes_Only_(film)">For your eyes only	            1981</a>
        <a href="https://en.wikipedia.org/wiki/Octopussy">Octopussy	                    1983</a>	
        <a href="https://en.wikipedia.org/wiki/A_View_to_a_Kill">A view to a kill                 1985</a>
    </div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/acteurs/index.php">Acteurs</a> / <a
			href="<?php echo baseUrl() ?>/pages/acteurs/acteur/Roger-Moore.php">Roger Moore</a>
</div>

<?php includeFooter(); ?>
</body>

</html>