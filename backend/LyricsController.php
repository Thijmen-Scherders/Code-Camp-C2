<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path."/backend/config.php";
include_once($config);

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateLyric'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $background_color = $_POST['background_color'];
    $image_url = $_POST['image_url'];
    $mp3_url = $_POST['mp3_url'];
    updateLyricsById($id, $title, $text, $author, $background_color, $image_url, $mp3_url);
    header("Location: " . baseUrl() . "/pages/songteksten/edit/index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createLyric'])) {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $background_color = $_POST['background_color'];
    $image_url = $_POST['image_url'];
    $mp3_url = $_POST['mp3_url'];
    try {
        createNewLyrics($title, $text, $author, $background_color, $image_url, $mp3_url);
    } catch (Exception $ex) {
        echo $ex;
        return;
    }
    header("Location: " . baseUrl() . "/pages/songteksten/edit/index.php");
    exit();
}

function getAllLyrics()
{
    require_once 'conn.php';
    $query = "SELECT * FROM lyrics";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getLyricById($id)
{
    require_once 'conn.php';
    $query = "SELECT id, title, `text`, author, background_color, image_url, mp3_url  FROM lyrics WHERE id='$id'";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getAllLyricsOverview()
{
    require_once 'conn.php';
    $query = "SELECT id, title, author, image_url, likes FROM lyrics";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function incrementLyricsLikesByOne($id) {
    require_once 'conn.php';
    $query = "UPDATE lyrics SET likes=likes + 1 WHERE id='$id'";
    $statement = $conn->prepare($query);
    $statement->execute();
}

function getAllLyricTitles()
{
    require_once 'conn.php';
    $query = "SELECT id, title, author FROM lyrics";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createNewLyrics($title, $text, $author, $background_color, $image_url, $mp3_url)
{
    require_once 'conn.php';
    try {
        $query = "INSERT INTO lyrics (title, `text`, author, background_color, image_url, mp3_url) VALUES ('$title', '$text', '$author', '$background_color', '$image_url', '$mp3_url')";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
        return true;
    } catch (PDOException $ex) {
        echo $ex;
        return false;
    }
}

function updateLyricsById($id, $title, $text, $author, $background_color, $image_url, $mp3_url)
{
    require_once 'conn.php';
    try {
        $query = "UPDATE lyrics SET title='$title', `text`='$text', author='$author', background_color='$background_color', image_url='$image_url', mp3_url = '$mp3_url' WHERE id='$id'";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
    return false;
}

function deleteLyricsById($id)
{
    try {
        require_once 'conn.php';
        $query = "DELETE FROM lyrics WHERE id = '$id'";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
    return false;
}