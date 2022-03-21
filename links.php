
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
	<title>Links</title>
</head>
<body>

    <?php includeHeader(); ?>
    <div class="filtext">
    <p>Hier vind u verschillende links naar film pagina's</p>
    </div>


    <div class="links">
        <div class="imdb">
            <img src="<?php echo baseUrl() ?>/public/img/imdb.png" alt="map">
            <a href="https://www.imdb.com/">imdb.com</a>
        </div>

        <div class="videoland">
            <img src="<?php echo baseUrl() ?>/public/img/videoland.png" alt="map">
            <a href="https://www.videoland.com/nl/">Videoland</a>
        </div>

        <div class="nlfilm">
        <img src="<?php echo baseUrl() ?>/public/img/nlfilm.png" alt="map">
        <a href="https://www.film.nl/">Film.nl</a>
        </div>

    </div>
<?php includeFooter(); ?>
</body>
</html>