<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('login', [LoginController::class, 'view'])->middleware('guest');
Route::post('login', [LoginController::class, 'autenticate']);

Route::post('logout', [LoginController::class, 'logout']);

// Route::get('login2', [AuthController::class, 'loginEmail']);


Route::get('register', [RegisterController::class, 'register']);
Route::post('register', [RegisterController::class, 'create']);

Route::get('home', [AuthController::class, 'home'])->middleware('auth');
Route::get('account', [AuthController::class, 'editAkun'])->middleware('auth');