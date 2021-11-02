<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ConfiguracoesController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MarcaVeiculoController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ModeloVeiculoController;
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

    // ! dashboard routes
    Route::get('/admin/dashboard', [UserAuthController::class, 'dashboard'])->name('admin.dashboard');

    // ! vehicle routes
    Route::post('/veiculos/getAll', [VeiculoController::class, 'getAll'])->name('veiculos.all.get');
    Route::post('/veiculos/ativarInativar', [VeiculoController::class, 'ativarInativar'])->name('veiculos.ativar-inativar');
    Route::resource('veiculos', VeiculoController::class);

    // ! marcas routes
    Route::post('/marcas/getAll', [MarcaVeiculoController::class, 'getAll'])->name('marcas.all.get');
    Route::resource('marcas', MarcaVeiculoController::class);

    // ! modelos routes
    Route::post('/modelos/getAll', [ModeloVeiculoController::class, 'getAll'])->name('modelos.all.get');
    Route::post('/modelos/getModelosByMarca', [ModeloVeiculoController::class, 'getModelosByMarca'])->name('modelos.bymarca.get');
    Route::resource('modelos', ModeloVeiculoController::class);

    // ! categorias routes
    Route::post('/categorias/getCategoriasVeiculos', [CategoriaController::class, 'getCategoriasVeiculos'])->name('categorias.veiculos.get');

    // ! configuracoes routes
    Route::resource('configuracoes', ConfiguracoesController::class);
    
    // ! images routes
    Route::get('images/{imgPath}', [ImageController::class, 'show'])->name('images.show')->where('imgPath', '.*');;
});


// ! routes that must not be accessed if user is authenticated
Route::group([
    'prefix' => '/{tenant}',
    'middleware' => [InitializeTenancyByPath::class, 'web', 'isLogged', 'setTenantCookies'],
], function () {
    // ! login routes
    Route::get('/', function () {
        return redirect()->route('admin.login', ['tenant' => Request::segment(1)]);
    })->name('login'); // ! the name 'login' is for laravel to redirect to this route when user unauthenticated
    Route::get('/admin/login', [UserAuthController::class, 'showUserLogin'])->name('admin.login');
    Route::post('/admin/login/do', [UserAuthController::class, 'userLogin'])->name('admin.login.do');
});
