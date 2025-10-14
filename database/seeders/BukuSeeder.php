<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'tahun' => 2005],
            ['judul' => 'Bumi', 'penulis' => 'Tere Liye', 'penerbit' => 'Gramedia', 'tahun' => 2014],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'penerbit' => 'Gramedia', 'tahun' => 2009],
        ];

        foreach ($data as $buku) {
            Buku::create($buku);
        }
    }
}
