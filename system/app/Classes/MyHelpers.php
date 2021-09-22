<?php

namespace App\Classes;

class MyHelpers{

    public static function setDefaultDabaseConnection($actual_connection, $new_connection, $old_database, $new_database){
        $oldConnection = "'default' => '$actual_connection',";
        $newConnection = "'default' => '$new_connection',";
        $oldDatabase = "'database' => '$old_database',";
        $newDatabase = "'database' => '$new_database',";

        $cachedConfigPath = base_path() . "/bootstrap/cache/config.php";
        
        $cachedConfigFileText = file_get_contents($cachedConfigPath, FILE_TEXT);
        $newCachedConfigFileText = str_replace($oldConnection, $newConnection, $cachedConfigFileText);
        file_put_contents($cachedConfigPath, $newCachedConfigFileText);

        $cachedConfigFileText = file_get_contents($cachedConfigPath, FILE_TEXT);
        $newCachedConfigFileText = str_replace($oldDatabase, $newDatabase, $cachedConfigFileText);
        file_put_contents($cachedConfigPath, $newCachedConfigFileText);
    }

}

?>