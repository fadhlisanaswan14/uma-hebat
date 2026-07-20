<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class NilaiController extends Controller
{
    public function showNilaiMahasiswa($mahasiswaId)
    {
        $mahasiswa = Mahasiswa::find($mahasiswaId);

        if (!$mahasiswa) {
            return view('nilai.notfound', ['id' => $mahasiswaId]);
        }

        return view('nilai.show', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}