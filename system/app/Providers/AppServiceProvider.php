<?php

namespace App\Providers;

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
        $dotenv = Dotenv::createImmutable(base_path());
        $dotenv->load();
        
        DB::setDefaultConnection('mysql');
        Artisan::call("database:createSystemDb");
        Artisan::call("database:migrateSystemDatabase");
        Artisan::call("database:seedSystemDb");
    }
}
