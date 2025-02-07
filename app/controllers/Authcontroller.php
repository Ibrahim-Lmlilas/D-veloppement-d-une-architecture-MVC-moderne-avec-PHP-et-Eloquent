<?php

namespace App\Controllers;

use App\Models\User;
use App\Core\Controller;
use App\Core\Session;
use App\core\Validator;

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

    public function Signup()   
     {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'npassword' => $_POST['npassword'],
                
            ];

            $validator = new Validator();
            $validator
                ->validateRequired($data, ['name', 'email', 'password', 'npassword'])
                ->validateEmail($data['email'])
                ->validatePasswordMatch($data['password'], $data['npassword'])
                ->validateMinLength($data['password'], 8, 'password');

            if ($validator->passes()) {
                $hashedPassword = password_hash($data["password"], PASSWORD_BCRYPT);


                User::create([
                    'username' => $data["name"],
                    'email' => $data["email"],
                    'password' => $hashedPassword
                    
                ]);

                $this->redirect('/login');
            } else {
                Session::set('error', 'Passwords do not match');
                $this->redirect('/register');
            }
        }
    }

    public function login()
    {
        if (isset($_POST['submit'])) {
            $email=$_POST['email'];
            $password=$_POST ['password'];

            $user = User::where('email', $email)->first();
            if ($user && password_verify($password, $user->password) ) {
                // var_dump($user);die();
                if($user->role=== "admin"){
                    Session::set('admin', $user->id);
                    $this->render('admin');
                }
                Session::set('user', $user);
                $this->render('dashboard');
            } else {
                Session::set('error', 'Error a7bibi ');

                $this->redirect('/signup');
            }
        }
    }

    public function logout()
    {
        Session::destroy();
        $this->redirect('/login');
    }
}









// 