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
    return redirect()->route('showRegister');
});
Route::get('/register', [CompanyController::class, 'showRegister'])->name('showRegister');
Route::post('/register/do', [CompanyController::class, 'register'])->name('register.do');


// ! verify data routes
Route::post('/getAllCompanies', [CompanyController::class, 'getAllCompanies'])->name('getAllCompanies');