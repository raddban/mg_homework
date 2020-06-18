<?php
namespace App\DB;

use Illuminate\Database\Capsule\Manager as Capsule;

class DB
{
    public static function connectDb()
    {
        $capsule = new Capsule();

        $capsule->addConnection([
            'driver' => '', // "mysql"
            'host' => '', // "127.0.0.1
            'database' => '', // "mg_homework"
            'username' => '', // "username"
            'password' => '' // "password"
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    }
}