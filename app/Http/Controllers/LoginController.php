<?php

namespace App\Http\Controllers; // Perhatikan namespace yang benar

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Implementasi login
    }
}