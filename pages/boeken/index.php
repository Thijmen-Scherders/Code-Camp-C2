<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/BooksController.php");
$books = getAllBooks()
?>

	<!DOCTYPE html>
	<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/books.css">
	<title>Boeken</title>
</head>

<?php includeHeader(); ?>

<div class="overview">
    <?php
    if (isset($_SESSION['uname'])) {
        echo "<a href='edit/index.php'>Goto the books admin panel</a>";
    }
    ?>
	<div class="books">
        <?php foreach ($books as $book): ?>
			<div class="book">
				<img class="image" src="<?php echo $book['image_url'] ?>" alt="book image"/>
				<div class="details">
					<p class="title"><?php echo $book['title']; ?></p>
					<p class="author">Author: <?php echo $book['author']; ?></p>
					<p class="description">Description: <?php echo $book['description']; ?></p>
					<p class="pages">Pages: <?php echo $book['pages']; ?></p>
					<p class="price">Price: $<?php echo $book['price']; ?></p>
					<p class="likes">Likes: <?php echo $book['likes']; ?></p>
					<a href="like.php?id=<?php echo $book['id'] ?>"
					   onclick="return confirm('Are you sure you want to like this book? Y/N')">Add like </a>
					<a href="buy.php?id=<?php echo $book['id'] ?>"
					   onclick="return confirm('Are you sure you want to buy this book? Y/N')">Buy book</a>

				</div>
			</div>
        <?php endforeach; ?>
	</div>
</div>


<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/boeken/index.php">Boeken</a> / Overzicht
</div>

<?php includeFooter(); ?>