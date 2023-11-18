<?php

use App\Http\Controllers\landingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
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

Route::get('/',[ProdukController::class,'indexKatalog'])->name('home');
Route::resource('/produk',ProdukController::class);

Route::get('/login', [LoginController::class,'login'])->name('loginview');

Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/welcome', [landingController::class, ]);



