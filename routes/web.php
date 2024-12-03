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

// Protected Routes (Authenticated Users Only)
Route::middleware('auth')->group(function () {
    // Route to store new users (admin only)
    Route::post('admin/store-user', [AuthController::class, 'storeUser'])->name('admin.storeUser');

    // Change /home to GET for dashboard
    Route::get('/home', [AuthController::class, 'Dashboard'])->name('home');
});

