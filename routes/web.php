<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute default Laravel (bisa dihapus atau dibiarkan)
Route::get('/', function () {
    return view('welcome');
});

// Tugas 1 & 4: Rute Dasar dengan Controller
Route::get('/welcome', [GreetingsController::class, 'welcome']);

// Tugas 2 & 4: Rute dengan Parameter menggunakan Controller
Route::get('/greet/{name}/{npm}', [GreetingsController::class, 'greet']);