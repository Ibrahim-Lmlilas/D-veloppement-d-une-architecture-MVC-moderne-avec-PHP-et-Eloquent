<?php
namespace App\Core;

class Security
{
    public function hashPassword($password)
    {
        $options = [
            'cost' => 12,
            ];
            return password_hash($password, PASSWORD_BCRYPT, $options);
            }


}