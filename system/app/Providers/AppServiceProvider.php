<?php

namespace App\Providers;

use App\Classes\MyHelpers;
use Dotenv\Dotenv;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        $dotenv = Dotenv::createImmutable(base_path());
        $dotenv->load();
        
        MyHelpers::createDatabaseIfNotExists();

        DB::setDefaultConnection('default_mysql');
        Artisan::call('db:seed'); //! may have perfomance issues
    }
}
