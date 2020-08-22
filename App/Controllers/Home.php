<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller {
/*     public function before() {
        echo "(before) ";
        // return false;
    }

    public function after() {
        echo " (after)";
    } */

    public function indexAction() {
        View::renderTemplate('Home/index.html', [
            'name' => 'Antoine'
        ]);
    }
}