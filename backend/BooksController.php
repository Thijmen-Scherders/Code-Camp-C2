<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path."/backend/config.php";
include_once($config);

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateBook'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $pages = $_POST['pages'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];
    updateBookById($id, $title, $author, $description, $pages, $price, $image_url);
    header("Location: " . baseUrl() . "/pages/boeken/edit/index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createBook'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $pages = $_POST['pages'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];
    createNewBook($title, $author, $description, $pages, $price, $image_url);
    header("Location: " . baseUrl() . "/pages/boeken/edit/index.php");
    exit();
}

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
    $query = "SELECT id, title, author, description, pages, price, image_url  FROM books WHERE id='$id'";
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
        echo $ex;
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