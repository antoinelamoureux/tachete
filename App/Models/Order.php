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
            $results = [];
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                array_push($results, $row["CompanyName"]);
            }
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getClientOrders($client)
    {
        try {
            $db = static::getDB();
            $sth = $db->prepare('SELECT * FROM orders INNER JOIN customers ON orders.CustomerID = customers.CustomerID WHERE orders.ShipName = ?');
            $sth->bindValue(1, $client, PDO::PARAM_STR);
            $sth->execute();
            $results = $sth->fetchAll(PDO::FETCH_ASSOC); 
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getLocations()
    {
        try {
            $db = static::getDB();
            $sth = $db->prepare('SELECT City FROM customers');
            $sth->execute();
            $results = [];
            while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                array_push($results, $row["City"]);
            }
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getLocationOrders($city)
    {
        try {
            $db = static::getDB();
            $sth = $db->prepare('SELECT * FROM orders INNER JOIN customers ON orders.CustomerID = customers.CustomerID WHERE orders.ShipCity = ?');
            $sth->bindValue(1, $city, PDO::PARAM_STR);
            $sth->execute();
            $results = $sth->fetchAll(PDO::FETCH_ASSOC); 
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getDurationOrders($startdate, $enddate)
    {
        try {
            $db = static::getDB();
            $sth = $db->prepare('SELECT * FROM orders WHERE OrderDate BETWEEN ? AND ?');
            $sth->bindValue(1, $startdate, PDO::PARAM_STR);
            $sth->bindValue(2, $enddate, PDO::PARAM_STR);
            $sth->execute();
            $results = $sth->fetchAll(PDO::FETCH_ASSOC); 
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
