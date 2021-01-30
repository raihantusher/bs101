<?php

namespace App\Libraries\Candle\Interfaces;

// Declare the interface 'iTemplate'
interface PasswordInterface
{
    public static function make($password);
    public static function verify($password,$hash);
}