<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
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
    return view('welcome');
});

Route::get('login',[authController::class,'login']);
Route::get('registration',[authController::class,'registration']);
Route::post('/registration',[authController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[authController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[authController::class,'dashboard']);
