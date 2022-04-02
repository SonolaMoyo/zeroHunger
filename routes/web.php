<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductlistController;

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

Route::get('/preregister', [RegisterController::class, 'preregister'])->name('preregister');

Route::get('/userregister', [RegisterController::class, 'user'])->name('userregister');
Route::post('/userregister', [RegisterController::class, 'storeuser']);

Route::get('/companyregister', [RegisterController::class, 'company'])->name('companyregister');
Route::post('/companyregister', [RegisterController::class, 'storecompany']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/productlists', [ProductlistController::class, 'index'])->name('product');

Route::get('/', function () {
    return view('home'); 
})->name('home');


