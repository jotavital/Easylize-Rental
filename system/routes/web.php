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
Route::get('company/logout', [AuthController::class, 'logout'])->name('logout.view')->middleware('auth:webcompany');
Route::post('company/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:webcompany');


Route::get('admin/login', [AuthController::class, 'showUserLogin'])->name('admin.login')->middleware('auth:webcompany');
Route::post('admin/login/do', [AuthController::class, 'userLogin'])->name('admin.login.do');

Route::get('admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth:webcompany');
