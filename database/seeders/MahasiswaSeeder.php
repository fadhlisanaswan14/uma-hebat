<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Nilai;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Mahasiswa
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Fadhli Sanaswan',
            'npm' => '238160056',
            'jurusan' => 'Teknik Informatika'
        ]);

        // Buat Matakuliah
        $matkul1 = Matakuliah::create([
            'nama' => 'Pemrograman Web',
            'kode' => 'WEB001',
            'sks' => 3
        ]);

        $matkul2 = Matakuliah::create([
            'nama' => 'Basis Data',
            'kode' => 'BD002',
            'sks' => 3
        ]);

        $matkul3 = Matakuliah::create([
            'nama' => 'Jaringan Komputer',
            'kode' => 'JAR003',
            'sks' => 2
        ]);

        // Buat Nilai
        Nilai::create([
            'mahasiswa_id' => $mahasiswa->id,
            'matakuliah_id' => $matkul1->id,
            'nilai' => 85
        ]);

        Nilai::create([
            'mahasiswa_id' => $mahasiswa->id,
            'matakuliah_id' => $matkul2->id,
            'nilai' => 95
        ]);

        Nilai::create([
            'mahasiswa_id' => $mahasiswa->id,
            'matakuliah_id' => $matkul3->id,
            'nilai' => 85
        ]);
    }
}