<?php
namespace Core;

class Database {
    private static $instance;
    private $connection;

    private function __construct() {
        $dbHost = getenv('DB_HOST');
        $dbName = getenv('DB_NAME');
        $dbUser = getenv('DB_USER');
        $dbPass = getenv('DB_PASS');

        $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8";

        try {
            $this->connection = new \PDO($dsn, $dbUser, $dbPass);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // Handle database connection error
            echo "Database connection error: " . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
