<?php

namespace App\Classes;

use App\Models\Company;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

class MyHelpers
{

    public static function setDefaultTenantParameterForRoutes()
    {
        URL::defaults(['tenant' => Request::segment(1)]);
    }

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

    public static function createTenantDatabaseIfNotExists($id_empresa, $banco_empresa)
    {
        $result = DB::select('SHOW DATABASES LIKE "' . $banco_empresa . '"');
        
        if (empty($result)) {
            $empresa = Company::find($id_empresa);
            $empresa->id = 1;
            $empresa->save();

            DB::unprepared('CREATE DATABASE ' . $banco_empresa);
        }
    }
}
