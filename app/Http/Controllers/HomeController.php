<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $books = [
            ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
            ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
            ['judul' => 'Dilan 1990', 'penulis' => 'Pidi Baiq', 'tahun' => 2014],
            ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
            ['judul' => 'Ayat-Ayat Cinta', 'penulis' => 'Habiburrahman El Shirazy', 'tahun' => 2004],
            ['judul' => 'Perahu Kertas', 'penulis' => 'Dee Lestari', 'tahun' => 2009],
            ['judul' => 'Ronggeng Dukuh Paruk', 'penulis' => 'Ahmad Tohari', 'tahun' => 1982],
            ['judul' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh', 'penulis' => 'Dee Lestari', 'tahun' => 2001],
            ['judul' => 'Cantik Itu Luka', 'penulis' => 'Eka Kurniawan', 'tahun' => 2002],
            ['judul' => 'Orang-Orang Biasa', 'penulis' => 'Andrea Hirata', 'tahun' => 2019],
            ['judul' => 'Hujan', 'penulis' => 'Tere Liye', 'tahun' => 2016],
            ['judul' => 'Pulang', 'penulis' => 'Tere Liye', 'tahun' => 2015],
            ['judul' => 'Lelaki Harimau', 'penulis' => 'Eka Kurniawan', 'tahun' => 2004],
            ['judul' => 'Sabtu Bersama Bapak', 'penulis' => 'Adhitya Mulya', 'tahun' => 2014],
            ['judul' => 'Surat Kecil untuk Tuhan', 'penulis' => 'Agnes Davonar', 'tahun' => 2008],
            ['judul' => '5 cm', 'penulis' => 'Donny Dhirgantoro', 'tahun' => 2005],
            ['judul' => 'Rectoverso', 'penulis' => 'Dee Lestari', 'tahun' => 2008],
            ['judul' => 'Tentang Kamu', 'penulis' => 'Tere Liye', 'tahun' => 2016],
            ['judul' => 'Bidadari Bermata Bening', 'penulis' => 'Habiburrahman El Shirazy', 'tahun' => 2017],
            ['judul' => 'Koala Kumal', 'penulis' => 'Raditya Dika', 'tahun' => 2015],
        ];

        // 🔍 Ambil input pencarian
        $search = $request->input('search');

        if ($search) {
            $books = array_filter($books, function ($book) use ($search) {
                return stripos($book['judul'], $search) !== false ||
                       stripos($book['penulis'], $search) !== false;
            });
        }

        // 💬 Tambahkan pesan ke view
        $message = "Selamat datang di daftar buku favorit Windy 💖📚";

        // Kirim data ke view
        return view('home', compact('books', 'search', 'message'));
    }
}
