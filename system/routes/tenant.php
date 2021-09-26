<?php

declare(strict_types=1);

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

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
    'middleware' => [InitializeTenancyByPath::class],
], function () {

    Route::get('/admin/login', [AuthController::class, 'showUserLogin'])->name('admin.login');
    Route::post('/admin/login/do', [AuthController::class, 'userLogin'])->name('admin.login.do');
    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout.view');
    Route::post('/admin/logout/do', [AuthController::class, 'logout'])->name('admin.logout.do');

    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
});
