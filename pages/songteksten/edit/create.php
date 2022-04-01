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
    <title>Lyrics - Create</title>
</head>

<?php includeHeader(); ?>

<div class="single">
	<div class="lyric">
		<form action="<?php echo baseUrl() ?>/backend/LyricsController.php" method="POST">

			<div class="details">
				<label>
					Title
					<input type="text" name="title" value="" placeholder="title"/>
				</label>
				<label>
					Author
					<input type="text" name="author" value="" placeholder="author"/>
				</label>
				<label>
					Text
					<input type="text" name="text" value="" placeholder="text"/>
				</label>
				<label>
					Background_Color
					<input type="text" name="background_color" value="" placeholder="background_color"/>
				</label>
				<label>
					Image_Url
					<input type="text" name="image_url" value="" placeholder="image_url"/>
				</label>
				<label>
					MP3_Url
					<input type="text" name="mp3_url" value="" placeholder="mp3_url"/>
				</label>
				<input type="submit" name="createLyric" value="Create Lyrics"/>
			</div>
		</form>

	</div>
</div>


<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/gereedschap/index.php">Gereedschap</a> / Overzicht
</div>

<?php includeFooter(); ?>
