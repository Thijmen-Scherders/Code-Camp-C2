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
    <title>Luke Skywalker</title>
</head>


<body class="green">

<?php includeHeader(); ?>

<div class="wrapper green">
<div class="container black">
    <img src="<?php echo baseUrl() ?>/public/luke.jpg" alt="map"/>
    <div class="container-column">
        <p class="luke">
        Luke Skywalker is een fictief personage en de hoofdpersoon van de originele filmtrilogie van de Star Wars-franchise, gemaakt door George Lucas.
        </p>
        <p class ="luke">
        Gespeeld door Mark Hamill, verscheen Luke voor het eerst in Star Wars (1977), [a] en keerde hij terug in The Empire Strikes Back (1980) en Return of the Jedi (1983). Drie decennia later keerde Hamill terug als Luke in de Star Wars-vervolgtrilogie en verscheen in alle drie de films: The Force Awakens (2015), The Last Jedi (2017) en The Rise of Skywalker (2019). Hij hernam de rol in de aflevering "Chapter 16: The Rescue" (2020) van The Mandalorian,
        </p>

    </div>


</div>
</div>
<?php includeFooter(); ?>  
</body>

</html>