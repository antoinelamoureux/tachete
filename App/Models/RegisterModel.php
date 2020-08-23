<?php

namespace App\Models;

use PDO;
use PDOException;

class RegisterModel extends \Core\Model
{
    public static function setUser($user)
    {
        try {
            $db = static::getDB();
            $username = $user['username'];
            $password = $user['password'];
            $email = $user['email'];
            $name = $user['name'];
            $firstname = $user['firstname'];

            $stmt = $db->query("INSERT INTO users(name, firstname, username, password, email) 
            VALUES ('$name', '$firstname', '$username', '$password', '$email')");
/*             while ($row = $stmt->fetch()) {
                $results = $row;
              }
            return $results; */
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


}