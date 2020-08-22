<?php

namespace App\Models;

use PDO;
use PDOException;

class Order extends \Core\Model
{

    public static function getAll()
    {
        try {
            $db = static::getDB();
            /* $stmt = $db->query("SELECT * FROM Orders INNER JOIN Customers 
            ON Orders.CustomerID = Customers.CustomerID 
            WHERE Orders.CustomerID = 'Ernst Handel'"); */
            $stmt = $db->query("SELECT * FROM Orders");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getClient()
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("SELECT * FROM Orders INNER JOIN Customers 
            ON Orders.CustomerID = Customers.CustomerID"); 
            $stmt = $db->query("SELECT * FROM Orders");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
