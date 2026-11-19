<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index(Request $request) 
    {
        $idLembaga = $request->user()->id_lembaga;

        $daftarKegiatan = Kegiatan::where('id_lembaga', $idLembaga)
            ->orderByDesc('created_at')
            ->get();

        return view('kegiatan.index', [
            'daftarKegiatan' => $daftarKegiatan,
        ]);
    }
}
