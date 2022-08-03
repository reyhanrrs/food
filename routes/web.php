<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MerchantController;
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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post('/login', [LoginController::class, 'login'])->name("login");
Route::get('/register',  [UserController::class, 'index'])->name("register");
Route::post('/register', [UserController::class, 'store'])->name("register");

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/product/{id}', [HomeController::class, 'detail'])->name("detail");
Route::get('/user', [UserController::class, 'index'])->name("user");

Route::get('/join-merchants', [MerchantController::class, 'create'])->name("join-merchant");
Route::post('/merchant', [MerchantController::class, 'store'])->name("merchant");

Route::get('/product', [ProductController::class, 'index'])->name("product");
Route::post('/product', [ProductController::class, 'store'])->name("product");
Route::get('/add-product', [ProductController::class, 'create']);
