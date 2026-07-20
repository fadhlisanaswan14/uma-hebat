<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Portfolio
Route::get('/home', [PortfolioController::class, 'home']);
Route::get('/profil', [PortfolioController::class, 'profil']);
Route::get('/pendidikan', [PortfolioController::class, 'pendidikan']);
Route::get('/keahlian', [PortfolioController::class, 'keahlian']);