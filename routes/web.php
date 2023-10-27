<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ChatController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register/store', 'store')->name('register.store');
    Route::get('/login', 'login')->name('login');
    Route::post('/login/check', 'check')->name('login.check');
    Route::get('/logout', 'logout')->name('logout');
});
Route::controller(ChatController::class)->group(function () {
    Route::get('/home', 'home')->name('home')->middleware('auth');
    Route::get('/chat/{user_id}', 'chatForm')->name('chat.view');
    Route::post('/chat/{user_id}', 'sendMessage')->name('chat.send');
});
