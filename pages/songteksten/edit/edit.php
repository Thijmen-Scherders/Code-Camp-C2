<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
include_once($path . "/backend/LyricsController.php");

$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
$lyric = getLyricById($query['id']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/lyrics.css">
<!--	<meta http-equiv="refresh" content="1"/>-->
	<title>Lyric - Edit</title>
</head>

<?php includeHeader(); ?>

<div class="single">
	<div class="lyric">
		<form action="<?php echo baseUrl() ?>/backend/LyricsController.php" method="POST">

			<input type="hidden" id="id" name="id" value="<?php echo $lyric['id']; ?>">
			<div class="details">
				<label>
					Title
					<input type="text" name="title" value="<?php echo $lyric['title'] ?>">
				</label>
				<label>
					Text
					<input class="text" type="text" name="text" value="<?php echo $lyric['text'] ?>">
				</label>
				<label>
					Author
					<input type="text" name="author" value="<?php echo $lyric['author'] ?>">
				</label>
				<label>
					background_color
					<input type="text" name="background_color" value="<?php echo $lyric['background_color'] ?>">
				</label>
				<label>
					image_url
					<input type="text" name="image_url" value="<?php echo $lyric['image_url'] ?>">
				</label>
				<label>
					mp3_url
					<input type="text" name="mp3_url" value="<?php echo $lyric['mp3_url'] ?>">
				</label>
				<input type="submit" name="updateLyric" value="Confirm Edit"/>
			</div>
		</form>

	</div>
</div>

