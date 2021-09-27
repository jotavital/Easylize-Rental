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

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UsuarioController;

Route::get('/', [AuthController::class, 'showLogin']);

Route::get('company/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('company/login/do', [AuthController::class, 'login'])->name('login.do');
