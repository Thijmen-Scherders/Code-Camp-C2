<?php

function getAllLyrics()
{
    require_once 'conn.php';
    $query = "SELECT * FROM lyrics";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createNewLyrics($title, $text, $author)
{
    require_once 'conn.php';
    try {
        $query = "INSERT INTO lyrics (title, 'text', author) VALUES ('$title', '$text', '$author')";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
    return false;
}

function updateLyricsById($id, $title, $text, $author)
{
    require_once 'conn.php';
    try {
        $query = "UPDATE lyrics SET title='$title', 'text'='$text', author='$author' WHERE id='$id'";
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