<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutentikasiController extends Controller
{
    public function tampilkanLogin()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        $data = $request->validate([
            'identitas' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $identitas = trim($data['identitas']);

        if (filter_var($identitas, FILTER_VALIDATE_EMAIL)) {
            $kredensial = ['email' => $identitas, 'peran' => 'Admin Lembaga'];
        } else {
            $kredensial = ['nim' => $identitas, 'peran' => 'Mahasiswa'];
        }

        $kredensial['password'] = $data['password'];

        if (!Auth::attempt($kredensial)) {
            return back()
                ->withErrors(['identitas' => 'NIM/email atau kata sandi salah'])
                ->onlyinput('identitas');
        }

        $request->session()->regenerate();

        if (Auth::user()->peran === 'Admin Lembaga') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
