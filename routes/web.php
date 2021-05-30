<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login', [Auth\LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [Auth\LoginController::class, 'loginCheck']);
Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return redirect()->route('login');
})->middleware('guest');
