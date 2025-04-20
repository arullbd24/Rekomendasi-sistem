<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index()
    {
        // Untuk sekarang, kita kirim data dummy ke view
        $jasa = [
            ['nama' => 'Fotografi Pernikahan', 'kategori' => 'Fotografi'],
            ['nama' => 'Video Company Profile', 'kategori' => 'Videografi'],
            ['nama' => 'Editing Video Ulang Tahun', 'kategori' => 'Editing'],
        ];

        return view('jasa.index', compact('jasa'));
    }
}
