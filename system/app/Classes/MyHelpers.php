<?php

namespace App\Classes;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;

class MyHelpers
{

    public static function deleteAllCookies()
    {
        // unset cookies
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach ($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time() - 1000);
                setcookie($name, '', time() - 1000, '/');
            }
        }
    }
}
