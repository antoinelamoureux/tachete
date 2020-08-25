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

    public static function getEmployees()
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("SELECT Employees.FirstName FROM Employees");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getOrders($employeename)
    {
        try {
            $db = static::getDB();
            $stmt = $db->query("SELECT * FROM Orders INNER JOIN Employees
            ON Orders.EmployeeID = Employees.EmployeeID
            WHERE Employees.FirstName = '$employeename'");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getClients()
    {
        try {
            $db = static::getDB();
            $sth = $db->prepare('SELECT CompanyName FROM customers');
            $sth->execute();
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $results = array($row["Name"], $row["CountryCode"]);
            }
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getClientOrders($client)
    {
    }
}
