<?php

/*

! THIS FILE IS GONNA BE USED TO SET THE TENANT DATABASE CONNECTIONS ON-THE-FLY

*/

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(base_path());
$dotenv->load();

return [
    'driver' => 'mysql',
    'url' => env('DATABASE_URL'),
    'host' => env('DB_HOST', 'DB_HOST'),
    'port' => env('DB_PORT', 'DB_PORT'),
    'database' => env('azulugueis', 'azulugueis'),
    'username' => env('DB_USERNAME', 'DB_USERNAME'),
    'password' => env('DB_PASSWORD', ''),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
    'options' => extension_loaded('pdo_mysql') ? array_filter([
        PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
    ]) : [],
];

?>