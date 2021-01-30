<?php

namespace App\Libraries\Candle\Interfaces;

// Declare the interface 'iTemplate'
interface AuthenticationInterface
{
    public static function login($login,$password);
    public static function isLoggedIn();
    public  static function logout();
    
    public static function register($fname, $lname, $email, $password);
    public  static function verifyRegistration($generated_key);

    public  static function forgot_password($email);
    
}