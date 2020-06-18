<?php
namespace App\Model;

use App\DB\DB;
class User
{
    public static function registerUser()
    {
        if (!empty($_POST))
        {
            $register = DB::connectDb();
            $register->table('users')->insert([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]);
            header('location: /');
        }
    }

    public static function loginUser()
    {
        $user = DB::connectDb();
        $a = $user->table('users')->where('email', $_POST['email'])->get()->first();
        if ($a->password == $_POST['password'])
        {
            $_SESSION['email'] = $_POST['email'];
            header('location: /user-page');
        }else
        {
            header('location: /');
        }
    }
}