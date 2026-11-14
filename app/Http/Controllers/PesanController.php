<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'    => 'required|string|max:255',
            'kelas_jurusan'   => 'required|string|max:255',
            'kesan_pesan'     => 'required|string',
            'saran'           => 'nullable|string',
            'kata_untuk_vilova' => 'nullable|string',
        ]);

        Pesan::create($request->only(['nama_lengkap', 'kelas_jurusan', 'kesan_pesan', 'saran', 'kata_untuk_vilova']));

        if($request->ajax()){
            return response()->json(['success' => true]);
        }

        return redirect('/')->with('success', 'Terima kasih! Pesan kamu sudah terkirim 💌');
    }
}
