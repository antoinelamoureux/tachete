<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Order;

class Register extends \Core\Controller {
    public function indexAction() {
        View::renderTemplate('Register/index.html');
    }
}