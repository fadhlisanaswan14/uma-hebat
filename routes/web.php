<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan nilai mahasiswa
Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])->name('tampilnilai');