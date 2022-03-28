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

function includeSongsSubMenu()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/pages/songteksten/submenu.php';
}


function includeToolsSubMenu()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/pages/gereedschap/submenu.php';
}

function includeActorsSubMenu()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/pages/acteurs/submenu.php';
}

function includeDrinksSubMenu()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/pages/dranken/submenu.php';
}

function includeBooksSubMenu()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/pages/boeken/submenu.php';
}

function includeZagenSubMenu()
{
    $path = $_SERVER['DOCUMENT_ROOT'];
    include $path .= '/pages/gereedschap/tool/zagen/submenu.php';
}

// Zelf aan passen indien de url anders is!

