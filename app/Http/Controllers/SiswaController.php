<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        // Ambil semua data siswa dari database
        $siswas = Siswa::all();

        // Kirim data ke view
        return view('siswa', compact('siswas'));
    }
}
