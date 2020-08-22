<?php

namespace App\Controllers;

use \Core\View;
use App\Models\LoginModel;

class Login extends \Core\Controller {
    public function indexAction() {
        View::renderTemplate('Login/index.html');
    }
}