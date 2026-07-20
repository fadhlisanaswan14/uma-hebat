<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah user sudah login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Periksa apakah user memiliki atribut age
        $user = Auth::user();
        
        // Jika age tidak ada atau null
        if (is_null($user->age)) {
            return redirect('/')->with('error', 'Data usia Anda belum diisi. Silakan hubungi admin.');
        }

        // Jika usia kurang dari 18 tahun
        if ($user->age < 18) {
            // Redirect dengan pesan error
            return redirect('/')->with('error', 'Maaf, Anda harus berusia minimal 18 tahun untuk mengakses halaman ini.');
        }

        // Jika usia >= 18 tahun, lanjutkan request
        return $next($request);
    }
}