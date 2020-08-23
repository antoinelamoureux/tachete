<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Order;

class Orders extends \Core\Controller {
    public function indexAction() {
        $orders = Order::getAll();
        View::renderTemplate('Orders/index.html', [
            'orders' => $orders
        ]);
    }

    public function employeeAction() {
        $employees = Order::getEmployees();
        View::renderTemplate('Orders/index.html', [
            'employees' => $employees
        ]);
    }

    public function submitAction() {
        $employeename = $_POST['employee'];
        $orders = Order::getOrders($employeename);
        View::renderTemplate('Orders/orders.html', [
            'orders' => $orders
        ]);
    }

    public function editAction() {
        echo 'Hello from the edit action in the Posts controllers!';
        echo '<p>Query string parameters: <pre>'.htmlspecialchars(print_r($this->route_params, true)). '</pre></p>';
    }
}