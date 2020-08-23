<?php

namespace App\Controllers;

use \Core\View;
use App\Models\RegisterModel;

class Register extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('Register/index.html');
    }

    public function submitAction()
    {
        if (
            !empty($_POST['username'])
            && !empty($_POST['password'])
            && !empty($_POST['email'])
            && !empty($_POST['name'])
            && !empty($_POST['firstname'])
        ) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $user = array(
                'username' => $username,
                'password' => $password_hash,
                'email' => $email,
                'name' => $name,
                'firstname' => $firstname
            );

            RegisterModel::setUser($user);
            View::renderTemplate('Register/confirm.html', [
                'username' => $username
            ]);
            } else {
                echo "L'inscription à échouée";
            }
        }
    }

