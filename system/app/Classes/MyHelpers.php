<?php

namespace App\Classes;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;

class MyHelpers
{

    public static function setDefaultDabaseConnection($new_database) // ! set default database for the TENANTS !
    {
        $configFilePath = base_path() . "/databaseConf.php";

        $oldDatabase = "'database' => env('DB_DATABASE', 'DB_DATABASE'),";
        $newDatabase = "'database' => env('$new_database', '$new_database'),";

        // ! set the default database in tenants config
        $configFileText = file_get_contents($configFilePath, FILE_TEXT);
        $newConfigFileText = str_replace($oldDatabase, $newDatabase, $configFileText);
        file_put_contents($configFilePath, $newConfigFileText);

        Artisan::call('optimize');
    }

    public static function setCompanyDataGlobals($oldKey, $oldValue, $newKey, $newValue)
    {
        $globalsFilePath = base_path() . "/config/globals.php";

        $oldValues = "'$oldKey' => '$oldValue'";
        $newValues = "'$newKey' => '$newValue'";

        $globalsFileText = file_get_contents($globalsFilePath, FILE_TEXT);
        $newGlobalsFileText = str_replace($oldValues, $newValues, $globalsFileText);
        file_put_contents($globalsFilePath, $newGlobalsFileText);

        Artisan::call('optimize');
    }

    public static function restoreDefaults(){
        $globalsFilePath = base_path() . "/config/globals.php";
        $defaultGlobalsFilePath = base_path() . "/config/globals_default.php";
        $databaseConfFilePath = base_path() . "/databaseConf.php";
        $defaultDatabaseConfFilePath = base_path() . "/databaseConf_default.php";

        $globalsFileText = file_get_contents($globalsFilePath, FILE_TEXT);
        $defaultGlobalsFileText = file_get_contents($defaultGlobalsFilePath, FILE_TEXT);
        $newGlobalsFileText = str_replace($globalsFileText, $defaultGlobalsFileText, $globalsFileText);
        file_put_contents($globalsFilePath, $newGlobalsFileText);

        $databaseConfFileText = file_get_contents($databaseConfFilePath, FILE_TEXT);
        $defaultDatabaseConfFileText = file_get_contents($defaultDatabaseConfFilePath, FILE_TEXT);
        $newDatabaseConfFileText = str_replace($databaseConfFileText, $defaultDatabaseConfFileText, $databaseConfFileText);
        file_put_contents($databaseConfFilePath, $newDatabaseConfFileText);

        Artisan::call('optimize');
    }
}
