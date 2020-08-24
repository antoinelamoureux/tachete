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
            echo "$output";
            $db = static::getDB();
            $stmt = $db->query("SELECT * FROM products WHERE product_name = '$output'");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function setPrice($product)
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("UPDATE products SET unit_price = $newprice WHERE product_name = '$product'");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}