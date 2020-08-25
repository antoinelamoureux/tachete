<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Order;

class Clients extends \Core\Controller {
    public function indexAction() {
        $clients = Order::getClients();
        View::renderTemplate('Clients/index.html', [
            'clients' => $clients
        ]);
    }

    public function submitAction() {
        $employeename = $_POST['employee'];
        $orders = Order::getOrders($employeename);
        View::renderTemplate('Clients/orders.html', [
            'orders' => $orders
        ]);
    }
}