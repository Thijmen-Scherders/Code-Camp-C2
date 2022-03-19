<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
</head>



<body class="yellow">

<?php includeHeader(); ?>   
<div class="wrapper">
<div class="container">
<img src="<?php echo baseUrl() ?>/public/darth.png" alt="map" a>"
<p class="darth">
Darth Vader is a fictional character in the Star Wars franchise. The character is the primary antagonist in the original trilogy and, as Anakin Skywalker, is a primary protagonist in the prequel trilogy. Star Wars creator George Lucas has collectively referred to the first six episodic films of the franchise as "the tragedy of Darth Vader".[3] He has become one of the most iconic villains in popular culture, and has been listed among the greatest villains and fictional characters ever.[4][5]

Originally a slave on Tatooine, Anakin Skywalker is a Jedi prophesied to bring balance to the Force. He is lured to the dark side of the Force by Palpatine and becomes a Sith Lord, assuming the title Darth Vader. After a lightsaber battle with his former mentor Obi-Wan Kenobi on Mustafar, in which he is severely injured, Vader is transformed into a cyborg. He then serves the Galactic Empire as its chief enforcer. Vader ultimately redeems himself by saving his son, Luke Skywalker, and killing Palpatine, sacrificing his own life in the process.[6] He is also the secret husband of Padmé Amidala, biological father of Princess Leia, and maternal grandfather of Kylo Ren.
</p> 


</div>   
</div>
<?php includeFooter(); ?>    
</body>
</html>