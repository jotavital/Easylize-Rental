<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ModeloController;
use Illuminate\Support\Facades\Request;
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
    'middleware' => [InitializeTenancyByPath::class, 'web', 'auth', 'setTenantCookies'],
], function () {

    // ! logout routes
    Route::get('/admin/logout', [UserAuthController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/dashboard', [UserAuthController::class, 'dashboard'])->name('admin.dashboard');

    // ! vehicle routes
    Route::get('/veiculos/create', [VeiculoController::class, 'showCreateVeiculo'])->name('veiculos.create.show');
    Route::get('/veiculos/all', [VeiculoController::class, 'showAllVeiculos'])->name('veiculos.all.show');
    Route::post('/veiculos/store', [VeiculoController::class, 'storeVeiculo'])->name('veiculos.store');
    Route::post('/veiculos/getAll', [VeiculoController::class, 'getAllVeiculos'])->name('veiculos.all.get');

    // ! marcas routes
    Route::get('/marcas', [MarcaController::class, 'showAllMarcas'])->name('marcas.show');
    Route::post('/marcas/store', [MarcaController::class, 'storeMarca'])->name('marcas.store');
    Route::post('/marcas/getAll', [MarcaController::class, 'getAllMarcas'])->name('marcas.all.get');

    // ! modelos routes
    Route::get('/modelos', [ModeloController::class, 'showAllModelos'])->name('modelos.show');
    Route::post('/modelos/store', [ModeloController::class, 'storeModelo'])->name('modelos.store');
    Route::post('/modelos/getAll', [ModeloController::class, 'getAllModelos'])->name('modelos.all.get');
    Route::post('/modelos/getModelosByMarca', [ModeloController::class, 'getModelosByMarca'])->name('modelos.bymarca.get');

    // ! categorias routes
    Route::post('/categorias/getCategoriasVeiculos', [CategoriaController::class, 'getCategoriasVeiculos'])->name('categorias.veiculos.get');
});

Route::group([
    'prefix' => '/{tenant}',
    'middleware' => [InitializeTenancyByPath::class, 'web', 'isLogged','setTenantCookies'],
], function () {
    // ! login routes
    Route::get('/', function () {
        return redirect()->route('admin.login', ['tenant' => Request::segment(1)]);
    });
    Route::get('/admin/login', [UserAuthController::class, 'showUserLogin'])->name('admin.login');
    Route::post('/admin/login/do', [UserAuthController::class, 'userLogin'])->name('admin.login.do');
});
