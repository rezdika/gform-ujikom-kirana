<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function dashboard()
    {
        $pesan = Pesan::latest()->get();
        return view('admin.dashboard', compact('pesan'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
