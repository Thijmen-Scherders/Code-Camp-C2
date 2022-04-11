<?php

session_start();

$dbHost = 'localhost';
$dbName = 'codecamp-c2';
$dbUser = 'codecamp-c2';
$dbPass = 'VEFIR2BACu21Qi1A24JEfu34keN73i';

$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
