<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\UserAuthController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

use Stancl\Tenancy\Middleware\InitializeTenancyByPath;

Route::group([
    'prefix' => '/{tenant}',
    'middleware' => [InitializeTenancyByPath::class, 'web'],
], function () {

    Route::group([
        'middleware' => "isLogged"
    ], function () {
        // ! login routes
        Route::get('/', function () {
            return redirect()->route('admin.login', ['tenant' => $_COOKIE['tenant_name']]);
        });
        Route::get('/admin/login', [UserAuthController::class, 'showUserLogin'])->name('admin.login');
        Route::post('/admin/login/do', [UserAuthController::class, 'userLogin'])->name('admin.login.do');
    });

    // ! logout routes
    Route::get('/admin/logout', [UserAuthController::class, 'logout'])->name('admin.logout.view');
    Route::post('/admin/logout/do', [UserAuthController::class, 'logout'])->name('admin.logout.do');

    Route::get('/admin/dashboard', [UserAuthController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth:web');
});