<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
    <title>Madness</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<?php includeSongsSubMenu(); ?>

<div class="wrapper">
	<div class="container-column red">
		<h1>Muse - Madness</h1>
            <div class="container song">
                  <img src="<?php echo baseUrl() ?>/public/img/Madness.png" alt="map"/>
                  <div class="container-column song">
                        <p> 
                        I, I can't get these memories out of my mind
                        And some kind of madness has started to evolve
                        I, I tried so hard to let you go
                        But some kind of madness is swallowing me whole, yeah
                        </p> 
                        <p> 
                        I have finally seen the light
                        And I have finally realized
                        What you mean
                        Oh oh oh
                        </p> 
                        <p> 
                        And now, I need to know is this real love
                        Or is it just madness keeping us afloat?
                        And when I look back at all the crazy fights we had
                        Like some kind of madness
                        Was taking control
                        Yeah
                        </p> 
                        <p> 
                        And now I have finally seen the light
                        And I have finally realized
                        What you need
                        Mm
                        </p> 
                        <p> 
                        But now I have finally seen the end (finally seen the end)
                        And I'm not expecting you to care (expecting you to care)
                        That I have finally seen the light (finally seen the light)
                        I have finally realized (realized)
                        I need to love
                        I need to love
                        </p> 
                        <p> 
                        Come to me
                        Trust in a dream
                        Come on and rescue me
                        Yes I know, I can be wrong
                        And maybe I'm too headstrong
                        Our love is
                        Madness
                        </p>
                  </div>
            </div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songteksten / Overzicht</a> /
	<a href="<?php echo baseUrl() ?>/pages/songteksten/songs/Madness.php">Madness</a>
</div>

<?php includeFooter(); ?>
</body>

</html>