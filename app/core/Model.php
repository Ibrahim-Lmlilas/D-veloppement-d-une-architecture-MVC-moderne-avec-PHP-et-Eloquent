<?php

namespace App\Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class Model
{
    protected $table;

    public function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => $_ENV['DB_DRIVER'],
            'host'      => $_ENV['DB_HOST'],
            'database'  => $_ENV['DB_NAME'],
            'username'  => $_ENV['DB_USER'],
            'password'  => $_ENV['DB_PASS'],
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

    public static function all()
    {
        return Capsule::table((new static)->table)->get();
    }

    public static function find($id)
    {
        return Capsule::table((new static)->table)->where('id', $id)->first();
    }
}
