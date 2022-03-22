<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/backend/config.php";
include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title>hamers</title>
</head>

<body class="mainpage">

<?php includeHeader(); ?>

<?php includeToolsSubMenu(); ?>

		<div class="Hamer">
			<h1>Hamers</h1>

			<h2>Een hamer is een klop- of slagwerktuig. Een hamer bestaat uit een steel,
				het handvat, met aan het eind de zogenaamde hamerkop. De vorm en grootte
				en het materiaal van de hamerkop en de lengte van de steel hangen sterk
				af van het type hamer. Bij hamers met een ijzeren hamerkop staat vaak het
				aantal grammen in het metaal geslagen. Voor speciale uitvoeringen, zoals
				voor percussie-instrumenten, wordt ook de term mallet (uit het Engels)
				gebruikt.
			</h2>

			<h2>type hamers</h2>

			<h2>
				De volgende tabel geeft een overzicht van typen van hamers:
			</h2>
			
			<div class="kopje"><h2>gewone hamer</h2></div>
			<h2>
				Een metalen hamerkop van 50-300 gram op een houten steel van ca.
				30 cm lang die onder meer wordt gebruikt om spijkers (draadnagels)
				in houten voorwerpen te slaan.</h2>

			<div class="kopje"><h2>klauwhamer</h2></div>
			<h2>
				Zoals een gewone hamer, maar de achterkant van de hamer heeft een
				platte V-groef waarin spijkers geklemd kunnen worden. De bovenkant
				is afgerond zodat de geklemde spijker uit het object gerold kan worden.</h2>

			<div class="kopje"><h2>vuist of moker</h2></div>
			<h2>
				Een zware hamer met een vierkante hamerkop van 1000-1500 gram op een
				steel van 30 cm lang, voor zwaar werk. Met een rubberen opzetstuk wordt
				een vuisthamer gebruikt om tegels of straatstenen in het zand te leggen
				voor het maken van bestrating.</h2>

			<div class="kopje"><h2>tegelhamer</h2></div>
			<h2>
				Houten hamer met grote houten kop en een korte steel. Om tegels te leggen.</h2>

			<div class="kopje"><h2>straathamer</h2></div>
			<h2>
				Een hamer om te straten, met een kromme zijde om stenen door midden te
				slaan, en een rechte afgeplatte zijde om stenen aan te slaan (bestraten).</h2>

			<div class="kopje"><h2>voorhamer</h2></div>
			<h2>
				Een hamer om sloopwerkzaamheden uit te voeren. Een hamerkop van een paar
				kilo op een steel van een meter lang.</h2>

			<div class="kopje"><h2>rubberen hamer</h2></div>
			<h2>Een rubberen hamer wordt vooral gebruikt bij het leggen van tegels op grond.
				Een kleine hamer met een rubberen gewicht die kan worden gebruikt voor
				voorzichtig werk, zoals het aankloppen van kleine lijmverbindingen in de
				houtbewerking. Kampeerders gebruiken een rubber hamer om de tentpinnen in
				de grond te slaan. Door (para)medici wordt soms een kleine hamer gebruikt
				met een zacht gedeelte. Deze heeft meestal twee gekleurde uiteinden.</h2>
		</div>



<?php includeFooter(); ?>

</body>

</html>