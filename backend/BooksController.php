<?php

function getAllBooks() {
    require_once 'conn.php';
    $query = "SELECT * FROM books";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createNewBook($title, $author, $description, $pages, $price): bool
{
    require_once 'conn.php';

    $query = "INSERT INTO books (title, author, description, pages, price) VALUES ('$title', '$author', '$description', '$pages', '$price')";
    $statement = $conn->prepare($query);
    $statement->execute();
    return true;
}