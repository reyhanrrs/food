<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ChatController;
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



Route::get('/login', [LoginController::class, 'index'])->name("login");
Route::post('/login', [LoginController::class, 'login'])->name("login");
Route::get('/logout', [LoginController::class, 'logout'])->name("logout");

Route::get('/register',  [UserController::class, 'index'])->name("register");
Route::post('/register', [UserController::class, 'store'])->name("register");

Route::get('/', [ProductController::class, 'all'])->name("home");
Route::get('/detail-product/{id}', [ProductController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('auth')->group(function () {
    Route::get('/join-merchants', [MerchantController::class, 'create'])->name("join-merchant");
    Route::post('/merchant', [MerchantController::class, 'store'])->name("merchant");

    Route::get('/product', [ProductController::class, 'index'])->name("merchant-product");
    Route::post('/product', [ProductController::class, 'store'])->name("merchant-product");
    Route::get('/add-product', [ProductController::class, 'create']);
    //authorize this
    Route::put('/edit-product', [ProductController::class, 'update']);
    Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
    Route::delete('/product/{id}', [ProductController::class, 'destroy']);

    Route::get('/chat/{id}', [ChatController::class, 'show']);
    Route::post('/chat/{id}', [ChatController::class, 'store']);
});
