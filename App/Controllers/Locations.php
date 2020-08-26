<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Order;

class Locations extends \Core\Controller {
    public function indexAction() {
        $locations = Order::getLocations();
        View::renderTemplate('Locations/index.html', [
            'locations' => $locations
        ]);
    }

    public function submitAction() {
        $city = $_POST['location'];
        $orders = Order::getLocationOrders($city);
        View::renderTemplate('Locations/orders.html', [
            'orders' => $orders
        ]);
    }
}