<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/LyricsController.php");
$lyrics = getAllLyrics()
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/lyrics.css">
	<meta http-equiv="refresh" content="1">
	<title>Lyrics Edit Overview</title>
</head>

<?php includeHeader(); ?>

<div class="overview">
	<a href="create.php">Create new lyrics</a>
	<div class="lyrics">

        <?php foreach ($lyrics as $lyric): ?>
			<div class="lyric">
				<img class="image" src="<?php echo $lyric['image_url'] ?>" alt="book image"/>
				<div class="details">
					<p class="title">Title: <?php echo $lyric['title']; ?></p>
					<p class="author">Author: <?php echo $lyric['author']; ?></p>
					<p class="description">Text: <?php echo $lyric['text']; ?></p>
					<p class="pages">Background_color: <?php echo $lyric['background_color']; ?></p>
					<p class="price">image_url: <?php echo $lyric['image_url']; ?></p>
					<p class="likes">mp3_url: <?php echo $lyric['mp3_url']; ?></p>
					<a href="edit.php?id=<?php echo $lyric['id'] ?>">Edit lyrics</a>
					<a href="delete.php?id=<?php echo $lyric['id']?> " onclick="return  confirm('do you want to delete Y/N')">Delete </a>
				</div>
			</div>
        <?php endforeach; ?>

	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/edit/index.php">Lyrics</a> / Edit / Overzicht
</div>

<?php includeFooter(); ?>