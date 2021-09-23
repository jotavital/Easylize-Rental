<?php

namespace App\Classes;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;

class MyHelpers
{

    public static function setDefaultDabaseConnection($new_database) // ! set default database for the TENANTS !
    {
        $configFilePath = base_path() . "/databaseConf.php";
        $databaseFilePath = base_path() . "config/database.php";

        $oldDatabase = "'database' => env('DB_DATABASE', 'DB_DATABASE'),";
        $newDatabase = "'database' => env('$new_database', '$new_database'),";

        // ! set the default database in tenants config
        $configFileText = file_get_contents($configFilePath, FILE_TEXT);
        $newConfigFileText = str_replace($oldDatabase, $newDatabase, $configFileText);
        file_put_contents($configFilePath, $newConfigFileText);

        Artisan::call('optimize');
        // return Redirect::refresh();
    }
}
