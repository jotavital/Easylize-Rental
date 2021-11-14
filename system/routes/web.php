<?php

use App\Http\Controllers\AluguelController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConfiguracoesController;
use App\Http\Controllers\FotosModeloVeiculoController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MarcaVeiculoController;
use App\Http\Controllers\ModeloVeiculoController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Auth;
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
    Route::resource('veiculos', VeiculoController::class);

    // ! marcas routes
    Route::post('/marcas/getAll', [MarcaVeiculoController::class, 'getAll'])->name('marcas.all.get');
    Route::resource('marcas', MarcaVeiculoController::class);

    // ! modelos routes
    Route::post('/modelos/getAll', [ModeloVeiculoController::class, 'getAll'])->name('modelos.all.get');
    Route::post('/modelos/getModelosByMarca', [ModeloVeiculoController::class, 'getModelosByMarca'])->name('modelos.bymarca.get');
    Route::resource('modelos', ModeloVeiculoController::class);

    // ! rotas de alugueis
    Route::resource('alugueis', AluguelController::class);

    // ! rotas de fotos do modelo do veiculo
    Route::resource('fotos_modelo_veiculo', FotosModeloVeiculoController::class);

    // ! categorias routes
    Route::post('/categorias/getCategoriasVeiculos', [CategoriaController::class, 'getCategoriasVeiculos'])->name('categorias.veiculos.get');

    // ! configuracoes routes
    Route::resource('configuracoes', ConfiguracoesController::class);

    // ! images routes
    Route::get('images/{imgPath}', [ImageController::class, 'show'])->name('images.show')->where('imgPath', '.*');
});


Route::group([
    'middleware' => ['web', 'isLogged'],
], function () {
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });
    Route::get('/admin/login', [UserAuthController::class, 'showUserLogin'])->name('admin.login');
    Route::post('/admin/login/do', [UserAuthController::class, 'userLogin'])->name('admin.login.do');
});