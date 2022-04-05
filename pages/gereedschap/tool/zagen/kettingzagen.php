<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>kettingzagen</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeZagenSubMenu(); ?>

<div class="kettingzaag">
	<div class="kettingzaag2">
		<h1>kettingzagen</h1>
		<img src="/public/img/kettingzaag.jpg" alt="kettingzaag">
		<h2>Een kettingzaag (ook motorzaag, motorkettingzaag of boomzaag genoemd)
			is een draagbare machine om mee te zagen. De belangrijkste functie is
			hout zagen.</h2>
	</div>
	<div class="kettingzaag2">
		<h2>Elektrische kettingzaag</h2>
		<img src="/public/img/elektrisch.jpg" alt="elektrische zaag">
		<h2>Elektrische kettingzagen zijn met name bedoeld voor particulier gebruik.
			Ze zijn milieuvriendelijker en maken doorgaans minder lawaai dan
			kettingzagen op benzine. Ze zijn praktischer in gebruik doordat ze
			lichter zijn. Elektrische kettingzagen zijn vaak goedkoper in aanschaf.
			Nadeel is het snoer bij sommige elektrische kettingzagen waardoor de
			actieradius beperkt is, maar draadloze elektrische kettingzagen bestaan ook.
			Deze werken op een accu.</h2>
	</div>

	<div class="kettingzaag3">
		<h2>Kettingzaag met brandstofmotor</h2>
		<img src="/public/img/brandstof.jpg" alt="brandstofmotorzaag">
		<h2>Benzinekettingzagen hebben bijna zonder uitzondering een tweetaktmotor.
			Benzine-aangedreven kettingzagen hebben het voordeel dat ze een grotere
			mobiliteit hebben en krachtiger zijn dan elektrische kettingzagen.
			Er zijn verschillende typen benzine-kettingzaag verkrijgbaar:
			Gewone motorkettingzaag = variërend van 30 cc tot 121 cc.
			Tophandle = licht type kettingzaag. Hoewel deze machines bediend
			kunnen worden met één hand, is dit verboden. Wordt vooral gebruikt in
			de fruitteelt en de boomverzorging. motorstokzaag = kettingzaag op een
			stok om takken op hoogte door te zagen.</h2>
	</div>

</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/gereedschap/index.php">Gereedschap</a> /
	<a href="<?php echo baseUrl() ?>/pages/gereedschap/tool/zagen/index.php">Zagen</a> /
	<a href="<?php echo baseUrl() ?>/pages/gereedschap/tool/zagen/kettingzagen.php">Kettingzagen</a>
</div>

<?php includeFooter(); ?>

</body>

</html>
