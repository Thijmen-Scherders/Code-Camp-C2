<?php

function getAllBooks()
{
    require_once 'conn.php';
    $query = "SELECT * FROM books";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getBookById($id) {
    require_once 'conn.php';
    $query = "SELECT title, author, description, pages, price, image_url  FROM books WHERE id='$id'";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function createNewBook($title, $author, $description, $pages, $price, $image_url)
{
    require_once 'conn.php';
    try {
        $query = "INSERT INTO books (title, author, description, pages, price, image_url) VALUES ('$title', '$author', '$description', '$pages', '$price', '$image_url')";
        $statement = $conn->prepare($query);
        $statement->execute();
        return true;
    } catch (PDOException $ex) {
        return $ex;
    }
}

function updateBookById($id, $title, $author, $description, $pages, $price, $image_url)
{
    require_once 'conn.php';
    try {
        $query = "UPDATE books SET title='$title', author='$author', description='$description', pages='$pages', price='$price', image_url='$image_url' WHERE id='$id'";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
}

function deleteBookById($id)
{
    try {
        require_once 'conn.php';
        $query = "DELETE FROM books WHERE id = '$id'";
        $statement = $conn->prepare($query);
        $statement->execute();
        return true;
    } catch (PDOException $ex) {
        return $ex;
    }
}