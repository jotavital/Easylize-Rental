<?php

namespace App\Providers;

use App\Classes\MyHelpers;
use App\Http\Controllers\CompanyController;
use App\Models\Company;
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
        if (!file_exists(base_path() . "/config/tenants_database.json")) {
            CompanyController::generateDatabaseConfigFileWithAllCompanies();
        }
    }
}
