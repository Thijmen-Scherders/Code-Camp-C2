<?php

$dbHost = 'localhost';
$dbName = 'codecamp-c2';
$dbUser = 'root';
$dbPass = '';

function baseUrl(): string
{
    return 'http://code-camp-c2.test';
}

function includeHeader()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/layouts/header.php';
}

function includeFooter()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/layouts/footer.php';
}

function includeSongMenu()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/pages/songteksten/song-links.php';
}


// Zelf aan passen indien de url anders is!

