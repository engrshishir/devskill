<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::post('admin/store-user', [AuthController::class, 'storeUser'])->name('admin.storeUser');
    Route::get('/home', [AuthController::class, 'Dashboard'])->name('home');
});

