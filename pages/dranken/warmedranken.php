<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>Warme dranken</title>
</head>

<body class="mainpage bg-purple">

<?php includeHeader(); ?>
<?php includeDrinksSubMenu(); ?>


	<div class="container-row">
		<div class="container-column koffie bg-grey">
			<h2>Koffie</h2>
			<img src="/public/img/koffie.jpg" alt="koffie"/>
			<p>Koffie is een meestal warm genuttigde drank, die wordt bereid op basis van water en gedroogde en gebrande pitten van de koffieplant (Coffea spp.) die vanwege hun vorm koffiebonen worden genoemd. Koffie bevat het stimulerende middel cafeïne.[1][2] De meeste soorten in het geslacht Coffea komen van nature voor in tropisch Afrika en op de eilanden in de Indische Oceaan. Ze vinden hun oorsprong in Ethiopië, Jemen en Soedan.</p>
			<div class="link-fix">
				<a href="<?php echo baseUrl()?>/pages/acteurs/acteur/Georgeclooney.php">George Clooney</a>
			</div>
		</div>
		<div class="container-column latte bg-grey">
			<h2>Latte</h2>
			<img src="/public/img/latte.jpg" alt="latte"/>
			<p>Een caffè latte of latte is een in veel Europese en Amerikaanse gelegenheden geserveerde koffiedrank, gemaakt met espresso en warme melk.</p>
		</div>
		<div class="container-column thee bg-grey">
			<h2>Thee</h2>
			<img src="/public/img/thee.jpg" alt="thee"/>
			<p>Thee is een warme drank die wordt gemaakt door infusie van de gedroogde bladeren van de theeplant Camellia sinensis. Alle als thee verkochte producten die niet van deze plant afkomstig zijn (bijvoorbeeld kamillethee of rooibos), zijn dan ook geen echte thee maar kruidenthee.</p>
		</div>
	</div>
<?php includeFooter(); ?>

</body>
</html>