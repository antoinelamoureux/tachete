<?php

namespace App\Controllers;

use \Core\View;
use App\Models\User;

class Users extends \Core\Controller
{
    public function before()
    {

    }

    public function after()
    {
    }

    public function indexAction()
    {
        session_start();
        if(isset($_SESSION['token']) && isset($_SESSION['username'])){
            $user_session = session_id();
            $token = $_SESSION['token'];
            $username = $_SESSION['username'];
            $results = User::getName($username);
            foreach ($results as $result) {
                $name = $result['name'];
                $firstname = $result['firstname'];
                }
            View::renderTemplate('Users/index.html', [
                'id' => $user_session,
                'token' => $token,
                'username' => $username,
                'name' => $name,
                'firstname' => $firstname
            ]);
        } else {
            echo 'Merci de vous connecter.';
        }
    }
}
