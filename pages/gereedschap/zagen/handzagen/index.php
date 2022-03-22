<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>handzagen</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeToolsSubMenu(); ?>

        <div class="handzaag">
            <h1>Handzagen</h1>
            <div class="order2">
                <img src="/public/img/handzaag.jpg" alt="Handzaag">
            </div>
            <h2>Een handzaag is een zaag met een taps toelopend, veerkrachtig stalen zaagblad dat voorzien is van een handvat. Het blad is ongeveer 1 mm dik, 400 à 500 mm lang, en circa 100 mm breed.
                De tanden van de zaag (met een lengte van circa 5 mm elk) zijn 'gezet', dat wil zeggen dat ze om beurten naar links en naar rechts zijn gebogen. De zetting bedraagt een derde van de bladdikte naar links en een derde naar rechts. Dit zorgt voor een bredere zaagsnede zodat het zaagblad niet in het hout klemt en vastloopt. Om gemakkelijk te kunnen zagen dienen de tanden niet alleen gezet, maar ook scherp te zijn.
                Voor het zagen van hout in de lengterichting van de houtvezels (schulpen) dienen de tanden onder een andere hoek geslepen te zijn dan bij het afkorten, waarbij dwars op de lengterichting van de vezels wordt gezaagd. Bij zagen die geschikt zijn voor het schulpen zijn de tanden haaks geslepen, waardoor deze tijdens het zagen een krul vormen. Bij het afkorten dient de hoek van de tanden tussen de 65 en 75° te liggen. Deze werken dan als een soort mesjes en snijden de houtvezels dwars door. Tegenwoordig ziet men meestal zagen die zogenaamd universeel zijn: men kan ermee afkorten en mee schulpen.</h2>
        
        </div>

    <?php includeFooter(); ?>

</body>

</html>