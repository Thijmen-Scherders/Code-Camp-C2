<?php

function getAllUsers()
{
    require_once 'conn.php';
    $query = "SELECT * FROM users";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createNewUser($username, $password, $role)
{
    require_once 'conn.php';
    try {
        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
}

function updateUserById($id, $username, $password, $role)
{
    require_once 'conn.php';
    try {
        $query = "UPDATE users SET username='$username', password='$password', role='$role' WHERE id='$id'";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
}

function deleteUserById($id)
{
    try {
        require_once 'conn.php';
        $query = "DELETE FROM users WHERE id = '$id'";
        $statement = $conn->prepare($query);
        $statement->execute();
        echo $statement->rowCount() . " records UPDATED successfully";
    } catch (PDOException $ex) {
        return $ex;
    }
}