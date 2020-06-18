<?php
namespace App\Controller;

use App\Model\User;
use App\View\Home;

class HomeController
{
    public function index()
    {
        if (empty($_SESSION['email']))
        {
            return Home::view('index.php');
        }
        return header('location: /user-page');
    }

    public function register()
    {
        if ($_POST['name'] != '' && $_POST['email'] != '' && $_POST['password'] != '')
        {
            User::registerUser();
        }else
        {
            $error = "All fields are required";
            return Home::view('index.php', ['error' => $error]);
        }
    }

    public function login()
    {
        User::loginUser();
    }

    public function userTemplate()
    {
        if (!empty($_SESSION['email']))
        {
            return Home::view('page.php');
        }
        return header('location: /');
    }

    public function logout()
    {
        unset($_SESSION['email']);
        return header('location: /');
    }

}