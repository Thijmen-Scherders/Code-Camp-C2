<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
include_once($config);
require_once($path . "/backend/LyricsController.php");

$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
$lyrics = getAllLyrics();
$lyricDetail = null;
foreach ($lyrics as $lyric):
    if ($query['id'] === $lyric['id']) {
        $lyricDetail = $lyric;
    }
endforeach;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<title><?php echo $lyricDetail['title'] ?> - <?php echo $lyricDetail['author'] ?></title>
</head>

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container-column blueExtended">
		<div class="container song">
            <?php foreach ($lyrics as $lyric): ?>

				<a href="<?php echo baseUrl() ?>/pages/songteksten/lyric.php?id=<?php echo $lyric['id'] ?>"><?php echo $lyric['title'] ?>
					- <?php echo $lyric['author'] ?></a>
            <?php endforeach; ?>
		</div>
	</div>
</div>

<div class="wrapper">
	<div class="container-column <?php echo $lyricDetail['background_color'] ?>">
		<h1><?php echo $lyricDetail['title'] ?> - <?php echo $lyricDetail['author'] ?></h1>
		<div class="container song">

			<img class="image" src="<?php echo $lyricDetail['image_url'] ?>" alt="book image"/>
			<div class="container-column">
                <?php echo $lyricDetail['text'] ?>
				<div class="mp3">
					<audio controls>
						<source src="<?php echo $lyricDetail['mp3_url']?>" type="audio/mpeg">
					</audio>
				</div>
			</div>
		</div>
	</div>