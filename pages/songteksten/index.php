<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/LyricsController.php");
$lyrics = getAllLyricsOverview()
?>

	<!DOCTYPE html>
	<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/lyrics.css">
	<title>Songteksten</title>
</head>

<?php includeHeader(); ?>

<div class="overview">
    <?php
    if (isset($_SESSION['uname'])) {
        echo "<a href='edit/index.php'>Goto the lyrics admin panel</a>";
    }
    ?>

	<div class="lyrics">

        <?php foreach ($lyrics as $lyric): ?>
			<a href="lyric.php?id=<?php echo $lyric['id'] ?>">
				<div class="lyric">
					<img class="image" src="<?php echo $lyric['image_url'] ?>" alt="lyrics image"/>
					<div class="details">
						<p class="title"><?php echo $lyric['title']; ?></p>
						<p class="author">Author: <?php echo $lyric['author']; ?></p>
						<p class="likes">Likes: <?php echo $lyric['likes']; ?></p>
						<br/>
						<a href="like.php?id=<?php echo $lyric['id'] ?>"
						   onclick="return confirm('Are you sure you want to like this song? Y/N')">Like het liedje </a>
					</div>
				</div>
			</a>
        <?php endforeach; ?>

	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songteksten</a> / Overzicht
</div>

<?php includeFooter(); ?>