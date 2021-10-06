<?php

use App\Http\Controllers\AuthController;
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

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\CompanyController;

Route::get('/', function(){
    return redirect()->route('companies.create');
});

Route::post('companies/getAll', [CompanyController::class, 'getAll'])->name('companies.all.get');
Route::resource('companies', CompanyController::class);