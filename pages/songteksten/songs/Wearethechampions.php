<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
    <title>We are the champions</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<?php includeSongsSubMenu(); ?>

<div class="wrapper">
	<div class="container-column blue">
		<h1>Queen - We are the champions</h1>
            <div class="container song">
                  <img src="<?php echo baseUrl() ?>/public/img/champions.png" alt="map"/>
                  <div class="container-column whiteText">
                        <p> 
                        I've paid my dues
                        Time after time
                        I've done my sentence
                        But committed no crime
                        And bad mistakes
                        I've made a few
                        I've had my share of sand
                        Kicked in my face
                        But I've come through
                        And we mean to go on and on and on and on
                        </p> 
                        <p> 
                        We are the champions, my friends
                        And we'll keep on fighting till the end
                        We are the champions
                        We are the champions
                        No time for losers
                        'Cause we are the champions of the World
                        </p> 
                        <p> 
                        I've taken my bows
                        And my curtain calls
                        You brought me fame and fortune
                        And everything that goes with it
                        I thank you all
                        But it's been no bed of roses
                        No pleasure cruise
                        I consider it a challenge before
                        The human race
                        And I ain't gonna lose
                        And we mean to go on and on and on and on
                        </p> 
                        <p> 
                        We are the champions, my friends
                        And we'll keep on fighting till the end
                        We are the champions
                        We are the champions
                        No time for losers
                        'Cause we are the champions of the World
                        </p> 
                        <p> 
                        We are the champions, my friends
                        And we'll keep on fighting till the end
                        We are the champions
                        We are the champions
                        No time for losers
                        'Cause we are the champions of the World
                        </p> 
                  </div>
            </div>
            <div class="mp3">
            <audio controls>
                <source src="/public/mp3/wearethechampions.mp3" type="audio/mpeg">
            </audio>
        </div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songteksten / Overzicht</a> /
	<a href="<?php echo baseUrl() ?>/pages/songteksten/songs/Wearethechampions.php">We are the Champions</a>
</div>

<?php includeFooter(); ?>
</body>

</html>