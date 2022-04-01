<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/BooksController.php");

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

			<div class="details">
				<label>
					Image url
					<input type="text" name="image_url" value="" placeholder="image_url"/>
				</label>
				<label>
					Title
					<input type="text" name="title" value="" placeholder="title"/>
				</label>
				<label>
					Author
					<input type="text" name="author" value="" placeholder="author"/>
				</label>
				<label>
					Description
					<input type="text" name="description" value="" placeholder="description"/>
				</label>
				<label>
					Pages
					<input type="number" name="pages" value="" placeholder="pages"/>
				</label>
				<label>
					Price
					<input type="number" name="price" value="" placeholder="price"/>
				</label>
				<input type="submit" name="createBook" value="Create Book"/>
			</div>
		</form>

	</div>
</div>


<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/boeken/edit/create.php">Books</a> / Create Book
</div>

<?php includeFooter(); ?>