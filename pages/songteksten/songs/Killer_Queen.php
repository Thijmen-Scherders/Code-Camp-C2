<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
    <title>Killer Queen</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<?php includeSongsSubMenu(); ?>

<div class="wrapper">
	<div class="container-column blue">
		<h1>Queen - Killer Queen</h1>
        <div class="container song">
            <img src="<?php echo baseUrl() ?>/public/img/Queen.png" alt="map"/>
                <div class="container-column whiteText">
                    <p> 
                        She keeps her Moet et Chandon
                        In her pretty cabinet
                        "Let them eat cake", she says
                        Just like Marie Antoinette
                        A built-in remedy
                        For Khrushchev and Kennedy
                        At anytime an invitation
                        You can't decline
                    </p> 
                    <p> 
                        Caviar and cigarettes
                        Well versed in etiquette
                        Extraordinarily nice
                    </p> 
                    <p>
                        She's a Killer Queen
                        Gunpowder, gelatine
                        Dynamite with a laser beam
                        Guaranteed to blow your mind
                        Anytime
                    </p> 
                    <p> 
                        Recommended at the price
                        Insatiable an appetite
                        Wanna try?
                    </p> 
                    <p> 
                        To avoid complications
                        She never kept the same address
                        In conversation
                        She spoke just like a baroness
                        Met a man from China
                        Went down to Geisha Minor
                        Then again incidentally
                        If you're that way inclined
                    </p> 
                    <p> 
                        Perfume came naturally from Paris (naturally)
                        For cars she couldn't care less
                        Fastidious and precise
                    </p>
                    <p>
                        She's a Killer Queen
                        Gunpowder, gelatine
                        Dynamite with a laser beam
                        Guaranteed to blow your mind
                        Anytime
                    </p>
                    <p>
                        Drop of a hat she's as willing as
                        Playful as a pussy cat
                        Then momentarily out of action
                        Temporarily out of gas
                        To absolutely drive you wild, wild
                        She's all out to get you
                    </p>
                    <p>
                        She's a Killer Queen
                        Gunpowder, gelatine
                        Dynamite with a laser beam
                        Guaranteed to blow your mind
                        Anytime
                    </p>
                    <p>
                        Recommended at the price
                        Insatiable an appetite
                        Wanna try?
                        You wanna try
                    </p>
                </div>
                
        </div>
        <div class="mp3">
            <audio controls>
                <source src="/mp3/killerqueen.mp3" type="audio/mpeg">
            </audio>
        </div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songteksten / Overzicht</a> /
	<a href="<?php echo baseUrl() ?>/pages/songteksten/songs/Killer_Queen.php">Killer Queen</a>
</div>

<?php includeFooter(); ?>
</body>

</html>