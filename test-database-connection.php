<?php
namespace Core;
use \PDOException; // Check if you have this line or a similar one at the top of your script

require_once 'Core/Database.php';


try {
    $db = Database::getInstance();
    $connection = $db->getConnection();

    if ($connection) {
        echo "Database connection successful!";
    } else {
        echo "Failed to connect to the database.";
    }
} catch (PDOException $e) {
    echo "Database connection error: " . $e->getMessage();
}
