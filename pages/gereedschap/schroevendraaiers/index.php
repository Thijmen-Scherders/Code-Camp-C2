<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>schroevendraaiers</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeToolsSubMenu(); ?>

        <div class="schroevendraaier">
            <h1>schroevendraaiers</h1>
            <h2>Een schroevendraaier is een stuk gereedschap waarmee schroeven worden aangebracht en verwijderd. Het bestaat uit een handvat met een metalen steel waarvan het uiteinde zo gevormd is dat het in de kop van een schroef past.
                Schroevendraaiers zijn in velerlei soorten, afmetingen en kwaliteiten verkrijgbaar. Er bestaan schroevendraaiers met een platte punt, alsook met een ster- of kruiskop. Goede schroevendraaiers zijn vervaardigd van speciale staalsoorten. Bij een juiste toepassing zijn ze praktisch onbreekbaar. Het heft van een schroevendraaier wordt meestal gemaakt van een slagvaste, onbreekbare kunststof. Soms vervaardigt men het heft nog van een taaie houtsoort. De grootte van schroevendraaier en schroef dienen bij elkaar te 'passen'.</h2>
            <h2>sleufkopschroevendraaier (plat);</h2>
        </div>

    <?php includeFooter(); ?>

</body>

</html>