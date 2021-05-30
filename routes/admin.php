<?php
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'is_admin']], function () {
    Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');
});
