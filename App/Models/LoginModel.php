<?php

namespace App\Models;

use PDO;
use PDOException;

class LoginModel extends \Core\Model
{
    public static function getUser($user)
    {
        try {
            $db = static::getDB();
            $username = $user['username'];
            $stmt = $db->query("SELECT username, password FROM users WHERE username = '$username'");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
