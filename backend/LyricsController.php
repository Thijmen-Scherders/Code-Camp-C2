<?php

function getAllLyrics()
{
    require_once 'conn.php';
    $query = "SELECT * FROM lyrics";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getLyricById($id) {
    require_once 'conn.php';
    $query = "SELECT id, title, 'text', author, background_color, image_url, mp3_url  FROM lyrics WHERE id='$id'";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getAllLyricsOverview()
{
    require_once 'conn.php';
    $query = "SELECT id, title, author, image_url FROM lyrics";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createNewLyrics($title, $text, $author, $background_color, $image_url, $mp3_url)
{
    require_once 'conn.php';
    try {
        $query = "INSERT INTO lyrics (title, 'text', author, background_color, image_url, mp3_url) VALUES ('$title', '$text', '$author', '$background_color', '$image_url', '$mp3_url')";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
    return false;
}

function updateLyricsById($id, $title, $text, $author, $background_color, $image_url, $mp3_url)
{
    require_once 'conn.php';
    try {
        $query = "UPDATE lyrics SET title='$title', 'text'='$text', author='$author', background_color='$background_color', image_url='$image_url', mp3_url = '$mp3_url' WHERE id='$id'";
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