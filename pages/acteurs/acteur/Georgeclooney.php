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
    <title>George Clooney</title>
</head>


<body class="">

<?php includeHeader(); ?>

<?php includeActorsSubMenu(); ?>

<div class="wrapper">
    <div class="container black">
        <img src="<?php echo baseUrl() ?>/public/img/georgeclooney.png" alt="map"/>
        <div class="container-column">
            <h1>George Timothy Clooney</h1>
            <p> 
                George Timothy Clooney (Lexington, Kentucky, 6 mei 1961) is een Amerikaans acteur, regisseur, scenarioschrijver en producent met meer dan dertig filmprijzen en nominaties op zijn naam. Voor de film Syriana won hij een Oscar voor beste mannelijke bijrol. Tevens won hij als producent een Oscar voor beste film voor Argo. Ook kreeg hij Oscarnominaties voor zijn rollen in Michael Clayton en The Descendants, een European Film Award (voor Good Night, and Good Luck) en meerdere Golden Globes (voor Syriana en O Brother, Where Art Thou?).
            </p> 
            <a href="https://nl.wikipedia.org/wiki/George_Clooney"> read more...</a>
        </div>
	</div>
</div>
</div>
<?php includeFooter(); ?>  
</body>

</html>