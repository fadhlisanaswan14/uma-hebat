<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Route home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route logout (default Laravel)
Route::get('/logout', function () {
    return redirect('/');
})->name('logout');

// Route yang dilindungi middleware age.check
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('age.check')->name('dashboard');

// Route untuk login (gunakan Laravel Breeze atau Jetstream)
Auth::routes();

// Atau jika menggunakan auth bawaan Laravel 11+
// Route::get('/login', function() {
//     return view('auth.login');
// })->name('login');

// Route untuk register
// Route::get('/register', function() {
//     return view('auth.register');
// })->name('register');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('age.check')->name('dashboard');