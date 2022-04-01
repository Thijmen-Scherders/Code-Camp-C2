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
    <meta http-equiv="refresh" content="2">
    <title><?php echo $lyric['title']?> - <?php echo $lyric['author']?></title>
</head>

<?php includeHeader(); ?>

<div class="wrapper">
    <div class="container-column <?php echo $lyric['background_color']?>">
        <h1><?php echo $lyric['title']?> - <?php echo $lyric['author']?></h1>
        <div class="container song">

            <img class="image" src="<?php echo $lyric['image_url'] ?>" alt="book image"/>
            <p><?php echo $lyric['text']?></p>

    </div>
</div>