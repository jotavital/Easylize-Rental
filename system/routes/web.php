<?php

use App\Http\Controllers\Auth\UserAuthController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => ['web', 'auth'],
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

    // ! rotas de fotos do modelo do veiculo
    Route::resource('fotos_modelo_veiculo', FotosModeloVeiculoController::class);

    // ! categorias routes
    Route::post('/categorias/getCategoriasVeiculos', [CategoriaController::class, 'getCategoriasVeiculos'])->name('categorias.veiculos.get');

    // ! configuracoes routes
    Route::resource('configuracoes', ConfiguracoesController::class);
    
    // ! images routes
    Route::get('images/{imgPath}', [ImageController::class, 'show'])->name('images.show')->where('imgPath', '.*');
});


// ! routes that must not be accessed if user is authenticated
Route::group([
    'middleware' => ['web', 'isLogged'],
], function () {
    // ! login routes
    Route::get('/', function () {
        return redirect()->route('admin.login');
    })->name('login'); // ! the name 'login' is for laravel to redirect to this route when user unauthenticated
    
    Route::get('/admin/login', [UserAuthController::class, 'showUserLogin'])->name('admin.login');
    Route::post('/admin/login/do', [UserAuthController::class, 'userLogin'])->name('admin.login.do');
});