<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Controller;
use App\Core\Session;

class AuthController extends Controller
{
    // public function Alo(){
    //     $this-> render('alo');
    // }

    public function showLogin()
    {
        $this->render('authentification/sign_in');
    }

    function showSignup()
    {
        $this->render('authentification/sign_up');
    }

    public function Signup(){

    }

    public function login()
    {
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];

        //     $user = User::where('email', $email)->first();
        //     if ($user && password_verify($password, $user->password)) {
        //         Session::set('user', $user);

        //         $this->redirect('/dashboard');
        //     } else {
        //         Session::set('error', 'Invalid email or password');

        //         $this->redirect('/login');
        //     }
        // }
    }

    public function logout()
    {
        Session::destroy();
        $this->redirect('/');
    }
}
