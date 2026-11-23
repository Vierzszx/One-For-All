<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KatalogController extends Controller
{
    public function index()
    {
        $daftarKegiatan = Kegiatan::where('status_publikasi', 'Terbit')
            ->orderByDesc('created_at')
            ->get();

        return view('katalog.index', [
            'daftarKegiatan' => $daftarKegiatan,
        ]);
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::where('id_kegiatan', $id)
            ->where('status_publikasi', 'Terbit')
            ->firstOrFail();
    
        return view('katalog.show', [
            'kegiatan' => $kegiatan,
        ]);
    }
}
