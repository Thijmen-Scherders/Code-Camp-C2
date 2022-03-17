<?php

$dbHost = 'localhost';
$dbName = 'codecamp-c2';
$dbUser = 'root';
$dbPass = '';

$path = $_SERVER['DOCUMENT_ROOT'];

function includeHeader() { include '../../layouts/header.php'; }
function includeFooter() { include '../../layouts/footer.php'; }

// Zelf aan passen indien de url anders is!
$base_url = 'http://code-camp-c2.test';