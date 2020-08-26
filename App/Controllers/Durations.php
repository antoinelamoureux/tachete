<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Order;

class Durations extends \Core\Controller {
    public function indexAction() {
        View::renderTemplate('Durations/index.html');
    }

    public function submitAction() {
        $startdate = $_POST['start_date'];
        $enddate = $_POST['end_date'];
        $orders = Order::getDurationOrders($startdate, $enddate);
        View::renderTemplate('Durations/orders.html', [
            'orders' => $orders
        ]);
    }
}