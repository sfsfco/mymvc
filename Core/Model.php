<?php
// core/Model.php
namespace Core;

use PDO;

class Model {
    protected $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }
}
