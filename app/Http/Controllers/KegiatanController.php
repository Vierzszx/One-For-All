<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
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

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'tanggal_pelaksanaan' => ['required', 'date'],
            'lokasi' => ['required', 'string', 'max:255'],
            'batas_pendaftaran' => [
                'required',
                'date',
                'before_or_equal:tanggal_pelaksanaan',
            ],
            'tautan_pendaftaran' => ['required', 'url:http,https'],
            'poster' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048',
            ],
                'biaya_pendaftaran' => [
                'nullable',
                'integer',
                'min:0',
                'max:999999999999',
            ],

            'nomor_rekening' => ['nullable', 'string', 'max:100'],

            'qris' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png',
                'max:2048',
            ],
        ]);

        $lokasiPoster = null;
        $lokasiQris = null;

        try {
            $lokasiPoster = $request->file('poster')
                ->store('poster', 'public');

            if ($lokasiPoster === false) {
                throw new \RuntimeException('Poster gagal disimpan.');
            }

            // QRIS hanya disimpan jika pengguna mengunggahnya.
            if ($request->hasFile('qris')) {
                $lokasiQris = $request->file('qris')
                    ->store('qris', 'public');

                if ($lokasiQris === false) {
                    throw new \RuntimeException('Gambar QRIS gagal disimpan.');
                }
            }

        // menyimpan data kegiatan baru
        $kegiatan = new Kegiatan();

        $kegiatan->id_lembaga = $request->user()->id_lembaga;
        $kegiatan->judul = $data['judul'];
        $kegiatan->kategori = $data['kategori'];
        $kegiatan->deskripsi = $data['deskripsi'];

        $kegiatan->tanggal_pelaksanaan = Carbon::parse(
            $data['tanggal_pelaksanaan']
        );

        $kegiatan->lokasi = $data['lokasi'];

        $kegiatan->batas_pendaftaran = Carbon::parse(
            $data['batas_pendaftaran']
        );

        $kegiatan->tautan_pendaftaran = $data['tautan_pendaftaran'];
        $kegiatan->poster = $lokasiPoster;
        $kegiatan->biaya_pendaftaran = $data['biaya_pendaftaran'] ?? null;
        $kegiatan->nomor_rekening = $data['nomor_rekening'] ?? null;
        $kegiatan->qris = $lokasiQris;
        $kegiatan->status_publikasi = 'Draft';

        $kegiatan->save();
        } catch (\Throwable $error) {
            // Membersihkan file jika proses penyimpanan gagal.
            if ($lokasiPoster) {
                Storage::disk('public')->delete($lokasiPoster);
            }
    
            if ($lokasiQris) {
                Storage::disk('public')->delete($lokasiQris);
            }
    
            throw $error;
        }
    
        return redirect()
            ->route('kegiatan.index')
            ->with('sukses', 'Kegiatan berhasil disimpan sebagai Draft.');
    }
}
