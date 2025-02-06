<?php


namespace App\Core;

use App\Core\Controller;

class Auth extends Controller
{
    public function index()
    {
        $this->render("/authentification/sign_in");
    }
    public function signup()
    {
        $this->render("/authentification/sign_up");
    }
}
