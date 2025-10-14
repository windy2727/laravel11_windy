<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create(['nama' => 'Windy', 'kelas' => '12 RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak']);
        Siswa::create(['nama' => 'Yuli', 'kelas' => '12 RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak']);
        Siswa::create(['nama' => 'Aldi', 'kelas' => '12 TKJ 1', 'jurusan' => 'Teknik Komputer & Jaringan']);
    }
}
