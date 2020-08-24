<?php

namespace App\Models;

use PDO;
use PDOException;

class Product extends \Core\Model
{

    public static function getAll()
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("SELECT ProductName FROM products");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getProduct($output)
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("SELECT * FROM products WHERE ProductName = '$output'");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function setPrice($product, $newprice)
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("UPDATE products SET UnitPrice = '$newprice' WHERE ProductName = '$product'");
            /* $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results; */
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}