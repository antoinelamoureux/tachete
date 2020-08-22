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

    public function clientAction() {
        $clients = Order::getClient();
        View::renderTemplate('Orders/index.html', [
            'clients' => $clients
        ]);
    }

    public function editAction() {
        echo 'Hello from the edit action in the Posts controllers!';
        echo '<p>Query string parameters: <pre>'.htmlspecialchars(print_r($this->route_params, true)). '</pre></p>';
    }
}