<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // Method untuk halaman Home
    public function home()
    {
        return view('home');
    }

    // Method untuk halaman Profil
    public function profil()
    {
        $data = [
            'nama' => 'Fadhli Sanaswan',  // Ganti dengan nama Anda
            'npm' => '238160056'             // Ganti dengan NPM Anda
        ];
        return view('profil', $data);
    }

    // Method untuk halaman Pendidikan
    public function pendidikan()
    {
        $data = [
            'kampus' => 'Universitas Medan Area',
            'prodi' => 'Teknik Informatika'
        ];
        return view('pendidikan', $data);
    }

    // Method untuk halaman Keahlian
    public function keahlian()
    {
        $data = [
            'skills' => ['PHP', 'Laravel', 'JavaScript', 'HTML/CSS', 'Git']
        ];
        return view('keahlian', $data);
    }
}