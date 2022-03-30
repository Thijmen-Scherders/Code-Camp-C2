<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/BooksController.php");

$url= $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
$boek = getBookById($query['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/books.css">
<!--	<meta http-equiv="refresh" content="1">-->
	<title>Boeken</title>
</head>

<?php includeHeader(); ?>

<div class="single">
	<div class="book">
		<img class="image" src="<?php echo $boek['image_url'] ?>" alt="book image"/>
		<div class="details">
			<h1 class="title"><?php echo $boek['title']; ?></h1>
			<p class="author">Author: <?php echo $boek['author']; ?></p>
			<p class="description">Description: <?php echo $boek['description']; ?></p>
			<p class="pages">Pages: <?php echo $boek['pages']; ?></p>
			<p class="price">Price: $<?php echo $boek['price']; ?></p>
		</div>
	</div>
</div>

