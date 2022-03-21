<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Songteksten</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>   
    <div class="cirkelbox">
        <h1>cirkelzagen</h1>
        <img src="/public/img/cirkelzaag.jpg" alt="cirkelzaag">
        <h2>Een cirkelzaag (of radiaalzaag) is een zaag met een blad in de vorm van 
            een stalen schijf, die met een motor tot een zeer hoog toerental wordt 
            aangedreven. De schijf kan in een zaagtafel zijn gemonteerd waarover het 
            te zagen materiaal wordt aangevoerd, of ingebouwd in een constructie samen 
            met een elektromotor tot draagbare handcirkelzaag. Deze heeft een minder 
            krachtige motor en kan ook dunner materiaal zagen. Cirkelzaagbladen bestaan
            in soorten en maten, met allerlei verschillende vertandingen, en ook de 
            diameter kan sterk verschillen (normaal is ca. 25 cm, maar industriële 
            cirkelzagen met veel grotere bladen bestaan ook). De maximale zaagdiepte 
            wordt bepaald door de straal van het cirkelzaagblad. Een cirkelzaag die 
            bedoeld is om latten, buizen, houten balken en dergelijke te zagen wordt 
            ook wel een afkorter of afkortzaag genoemd.
        </h2>
    </div>
    <?php includeFooter(); ?>

</body>

</html>