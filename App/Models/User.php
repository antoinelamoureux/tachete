<?php

namespace App\Models;

use PDO;
use PDOException;

class User extends \Core\Model
{

    public static function getName($username)
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("SELECT name, firstname FROM users WHERE username = '$username'");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}