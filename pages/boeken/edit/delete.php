<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path."/backend/config.php";
include_once($config);
include_once($path."/backend/BooksController.php");

$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);

deleteBookById($query['id']);

header("Location: ".baseUrl()."/pages/boeken/edit/index.php");
exit();