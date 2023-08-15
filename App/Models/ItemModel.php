<?php
namespace App\Models;

use Core\Database;

class ItemModel {
    public static function getAllItems() {
        $db = Database::getInstance();
        $connection = $db->getConnection();

        $query = "SELECT * FROM items";
        $statement = $connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function createItem($name, $description) {
        $db = Database::getInstance();
        $connection = $db->getConnection();

        $query = "INSERT INTO items (name, description) VALUES (:name, :description)";
        $statement = $connection->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':description', $description);
        $statement->execute();

        return $connection->lastInsertId();
    }

    public static function getItemById($id) {
        $db = Database::getInstance();
        $connection = $db->getConnection();

        $query = "SELECT * FROM items WHERE id = :id";
        $statement = $connection->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();

        return $statement->fetch();
    }

    public static function updateItem($id, $name, $description) {
        $db = Database::getInstance();
        $connection = $db->getConnection();

        $query = "UPDATE items SET name = :name, description = :description WHERE id = :id";
        $statement = $connection->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }

    public static function deleteItem($id) {
        $db = Database::getInstance();
        $connection = $db->getConnection();

        $query = "DELETE FROM items WHERE id = :id";
        $statement = $connection->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
