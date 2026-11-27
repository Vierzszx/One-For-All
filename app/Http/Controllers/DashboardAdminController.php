<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index(Request $request) 
    {
        // mengambil akun yang sedang login
        $pengguna = $request->user();

        // mengambil lembaga milik admin
        $lembaga = DB::table('lembaga')
            ->where('id_lembaga', $pengguna->id_lembaga)
            ->first();

        // Menghitung seluruh kegiatan milik lembaga admin.
        $totalKegiatan = Kegiatan::where('id_lembaga', $pengguna->id_lembaga)
            ->count();

        // menghitung kegiatan yang masih berupa draft
        $jumlahDraft = Kegiatan::where (
            'id_lembaga',
            $pengguna->id_lembaga
        )
            ->where('status_publikasi', 'Draft')
            ->count();
        
        // mengambil 5 kegiatan yang terakhir diperbarui
        $kegiatanTerbaru = Kegiatan::where (
            'id_lembaga',
            $pengguna->id_lembaga
        )
            ->orderByDesc('updated_at')
            ->orderByDesc('id_kegiatan')
            ->limit(5)
            ->get();

        return view('admin.dashboard', [
            'pengguna' => $pengguna,
            'lembaga' => $lembaga,
            'totalKegiatan' => $totalKegiatan,
            'jumlahDraft' => $jumlahDraft,
            'kegiatanTerbaru' => $kegiatanTerbaru,
        ]);
    }
}
