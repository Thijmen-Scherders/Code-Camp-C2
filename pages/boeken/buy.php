<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/BooksController.php");

$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$book = getBookById($query['id'])
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/books.css">
	<title>Boeken</title>
</head>

<?php includeHeader(); ?>

<div class="single">
	<div class="book">
		<h1>You've bought this book!</h1>
		<img class="image" src="<?php echo $book['image_url'] ?>" alt="book image"/>
		<div class="details">
			<p class="title"><?php echo $book['title']; ?></p>
			<p class="author">Author: <?php echo $book['author']; ?></p>
			<p class="description">Description: <?php echo $book['description']; ?></p>
			<p class="pages">Pages: <?php echo $book['pages']; ?></p>
			<p class="price">Price: $<?php echo $book['price']; ?></p>
		</div>
	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/boeken/buy.php">Boeken</a> / Buy book
</div>

<?php includeFooter(); ?>