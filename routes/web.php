<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('/redirect', [\App\Http\Controllers\IndexController::class, 'redirect']);
Route::get('/contact', [\App\Http\Controllers\IndexController::class, 'contact']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::get('/recover', [\App\Http\Controllers\UserController::class, 'recover']);
Route::get('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);