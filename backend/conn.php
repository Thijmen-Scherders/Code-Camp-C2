<?php
$dbHost = 'localhost';
$dbName = 'codecamp-c2';
$dbUser = 'codecamp-c2';
$dbPass = 'VEFIR2BACu21Qi1A24JEfu34keN73i';

//Met behulp van PDO zetten we de connectie op, waarna we met setAttribute de manier van errormeldingen weergeven bepalen.
$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
