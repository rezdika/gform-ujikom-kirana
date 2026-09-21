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
        $total = $pesan->count();
        $hari_ini = Pesan::whereDate('created_at', today())->count();
        $dengan_saran = Pesan::whereNotNull('saran')->where('saran','!=','')->count();
        return view('admin.dashboard', compact('pesan','total','hari_ini','dengan_saran'));
    }

    public function statistik()
    {
        // Pesan per hari 7 hari terakhir
        $perHari = collect(range(6, 0))->map(function($i) {
            $date = now()->subDays($i);
            return [
                'label' => $date->format('d M'),
                'count' => Pesan::whereDate('created_at', $date)->count(),
            ];
        });

        // Saran vs tidak
        $denganSaran = Pesan::whereNotNull('saran')->where('saran','!=','')->count();
        $tanpaSaran  = Pesan::count() - $denganSaran;

        // Top 5 kelas
        $perKelas = Pesan::selectRaw('kelas_jurusan, count(*) as total')
            ->groupBy('kelas_jurusan')
            ->orderByDesc('total')
            ->limit(5)
            ->pluck('total','kelas_jurusan');

        return view('admin.statistik', compact('perHari','denganSaran','tanpaSaran','perKelas'));
    }

    public function destroy($id)
    {
        Pesan::findOrFail($id)->delete();
        return back()->with('deleted', 'Pesan berhasil dihapus.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
