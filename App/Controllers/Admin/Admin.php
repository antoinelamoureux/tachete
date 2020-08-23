<?php

namespace App\Controllers\Admin;

class Admin extends \Core\Controller {
    public function before() {
        echo "(before) ";
        // return false;
    }

    public function after() {
        echo " (after)";
    }

    public function indexAction() {
        echo 'User admin index.';
    }
}