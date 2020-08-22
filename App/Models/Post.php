<?php

namespace App\Models;

use PDO;
use PDOException;

class Post extends \Core\Model
{

    public static function getAll()
    {
        $host = 'localhost:8889';
        $dbname = 'mvc';
        $username = 'admin';
        $password = 'admin';

        try {
            $db = static::getDB();
            $stmt = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
