<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Tampilkan form register
    public function show()
    {
        return view('auth.register');
    }

    // Proses data dari form register
}
