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
	<meta http-equiv="refresh" content="2">
	<title>Songteksten</title>
</head>

<?php includeHeader(); ?>

<div class="overview">
	<a href="edit/index.php">Goto the lyrics admin panel</a>

	<div class="lyrics">

        <?php foreach ($lyrics as $lyric): ?>
		<a href="lyric.php?id=<?php echo $lyric['id']?>">
			<div class="lyric">
				<img class="image" src="<?php echo $lyric['image_url'] ?>" alt="lyrics image"/>
				<div class="details">
					<p class="title"><?php echo $lyric['title']; ?></p>
					<p class="author">Author: <?php echo $lyric['author']; ?></p>
				</div>
			</div>
		</a>
        <?php endforeach; ?>

	</div>
</div>

<div class="kruimelpad">
	Kruimelpad - <a href="<?php echo baseUrl() ?>/pages/songteksten/index.php">Songtexten</a> / Overzicht
</div>

<?php includeFooter(); ?>