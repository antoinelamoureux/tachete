<?php

namespace App\Controllers;

use \Core\View;
use App\Models\LoginModel;

class Login extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('Login/index.html');
    }

    public function submitAction()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = array(
                'username' => $username,
                'password' => $password
            );
            $result = LoginModel::getUser($user);

            if ($result) {
                $length = 32;
                $token = bin2hex(random_bytes($length));
                session_start();
                $_SESSION['token'] = $token;
                $_SESSION['username'] = $username;
                header('Location: \Users\index');
            } else {
                echo "Utilisateur non trouvé";
            }
        }
    }
}
