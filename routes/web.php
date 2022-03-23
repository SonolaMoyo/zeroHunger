<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/signin', [Controller::class, 'signin'])->name('signin');
Route::post('/signin', [Controller::class, 'storesignin']);

Route::get('/signup', [Controller::class, 'signup'])->name('signup');
Route::post('/signup', [Controller::class, 'storesignup']);

Route::get('/products', [Controller::class, 'products'])->name('products');



