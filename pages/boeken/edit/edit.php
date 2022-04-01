<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/BooksController.php");

$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
$book = getBookById($query['id']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/books.css">
	<title>Boeken</title>
</head>

<?php includeHeader(); ?>

<?php

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: '.baseUrl()."/auth/login.php");
}

?>

<div class="single">
	<div class="book">
		<form action="<?php echo baseUrl() ?>/backend/BooksController.php" method="POST">

			<input type="hidden" id="id" name="id" value="<?php echo $book['id']; ?>">
			<img class="image" src="<?php echo $book['image_url'] ?>" alt="book image"/>
			<div class="details">
				<label>
					Image url
					<input type="text" name="image_url" value="<?php echo $book['image_url'] ?>">
				</label>
				<label>
					Title
					<input type="text" name="title" value="<?php echo $book['title'] ?>">
				</label>
				<label>
					Author
					<input type="text" name="author" value="<?php echo $book['author'] ?>">
				</label>
				<label>
					Description
					<input type="text" name="description" value="<?php echo $book['description'] ?>">
				</label>
				<label>
					Pages
					<input type="text" name="pages" value="<?php echo $book['pages'] ?>">
				</label>
				<label>
					Price
					<input type="text" name="price" value="<?php echo $book['price'] ?>">
				</label>
				<input type="submit" name="updateBook" value="Confirm Edit"/>
			</div>
		</form>

	</div>
</div>



<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/boeken/edit/edit.php">Boeken</a> / Edit / Edit Book
</div>

<?php includeFooter(); ?>