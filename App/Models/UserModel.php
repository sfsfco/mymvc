<?php
// app/Models/UserModel.php
namespace App\Models;

use Core\Model;

class UserModel extends Model {
    public function authenticate($username, $password) {
        // Query the database and compare hashed password
    }
}
