<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PendaftaranController extends Controller
{
    public function buka(Request $request, $id)
    {
        // Route sudah memastikan pengguna login.
        if ($request->user()->peran !== 'Mahasiswa') {
            abort(403, 'Pendaftaran kegiatan khusus mahasiswa.');
        }

        // Kegiatan harus sudah diterbitkan.
        $kegiatan = Kegiatan::where('id_kegiatan', $id)
            ->where('status_publikasi', 'Terbit')
            ->firstOrFail();

        // Periksa batas pendaftaran menggunakan waktu server.
        $batasPendaftaran = Carbon::parse(
            $kegiatan->batas_pendaftaran
        );

        if (now()->greaterThan($batasPendaftaran)) {
            return redirect()
                ->route('katalog.show', ['id' => $id])
                ->with('gagal', 'Pendaftaran kegiatan sudah ditutup.');
        }

        return redirect()->away($kegiatan->tautan_pendaftaran);
    }
}