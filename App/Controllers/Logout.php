<?php

namespace App\Controllers;
use \Core\View;

class Logout extends \Core\Controller {
    public function indexAction() {
        session_start();
        session_unset();
        session_destroy();
        View::renderTemplate('Logout/index.html');
    }

}