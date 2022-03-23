<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
    <title>Uprising</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<?php includeSongsSubMenu(); ?>

<div class="wrapper">
	<div class="container-column green">
		<h1>My Baby - Uprising</h1>
            <div class="container song">
                  <img src="<?php echo baseUrl() ?>/public/img/MyBaby.png" alt="map"/>
                  <div class="container-column redText">
                        <p> 
                        Allow me in your tub
                        Just allow me in your club
                        Allow me to drink from your cup
                        I'll be coming back for more
                        </p> 
                        <p> 
                        Allow me in your dream
                        Allow me in your scene
                        Just allow me on your knees
                        I'll be coming back for more
                        </p> 
                        <p> 
                        Sisters, keep on rising
                        Brothers, keep on rising
                        This girl keeps on rising
                        Keep on rising up
                        </p> 
                        <p> 
                        All I Believe in your school
                        I Believe in your rules
                        I Believe in your truth
                        I'll be coming back for more
                        </p> 
                        <p> 
                        I Believe in your land
                        I Believe in that man
                        I Believe in your command
                        I'll be coming back for more
                        </p> 
                        <p> 
                        Sisters, Brothers, Lovers
                        Keep on rising up
                        </p>
                        <p>
                        Sisters, keep on rising
                        Brothers, keep on rising
                        This girl keeps on rising
                        Keep on rising up
                        </p>
                        <p>
                        Uprising, uprising
                        Uprising, uprising
                        </p>
                        <p>
                        Sisters, Brothers, Lovers
                        This girl keep on rising up
                        </p>
                        <p>
                        Sisters, keep on rising
                        Brothers, keep on rising
                        This girl keeps on rising
                        Keep on rising up
                        </p>
                  </div>
            </div>
            <div class="mp3">
            <audio controls>
                <source src="/public/mp3/MyBaby.mp3" type="audio/mpeg">
            </audio>
        </div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songteksten / Overzicht</a> /
	<a href="<?php echo baseUrl() ?>/pages/songteksten/songs/Uprising-MyBaby.php">My Baby - Uprising</a>
</div>

<?php includeFooter(); ?>
</body>

</html>