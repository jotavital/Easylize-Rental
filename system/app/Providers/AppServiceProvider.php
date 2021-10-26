<?php

namespace App\Providers;

use App\Classes\MyHelpers;
use Dotenv\Dotenv;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $dotenv = Dotenv::createImmutable(base_path());
        $dotenv->load();

        DB::purge('mysql');

        config(["database.connections.mysql.database" => "mysql"]);

        DB::setDefaultConnection('mysql');
        Artisan::call("database:createSystemDb");
        Artisan::call("database:migrateSystemDatabase");
        MyHelpers::setDefaultTenantParameterForRoutes();
    }
}
