<?php

$dbHost = 'localhost';
$dbName = 'codecamp-c2';
$dbUser = 'root';
$dbPass = '';

function baseUrl() {
    return 'http://code-camp-c2.test';
}

function includeHeader() {
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.='/layouts/header.php'; }
function includeFooter() {
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path.='/layouts/footer.php'; }

// Zelf aan passen indien de url anders is!

