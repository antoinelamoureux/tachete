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
        $client = $_POST['client'];
        $orders = Order::getClientOrders($client);
        View::renderTemplate('Clients/orders.html', [
            'orders' => $orders
        ]);
    }
}