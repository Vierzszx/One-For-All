<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kegiatan Lembaga Saya | FILKOM satu titik</title>
</head>
<body>
    <h1>Kegiatan Lembaga Saya</h1>
    <p>Admin: {{ auth()->user()->nama_lengkap }}</p>

    @if (session('sukses'))
        <p>{{ session('sukses') }}</p>
    @endif

    <p>
        <a href="{{ route('kegiatan.create') }}">
            + Tambah Kegiatan
        </a>
    </p>

    @forelse ($daftarKegiatan as $kegiatan)
        <div>
            <h2>{{ $kegiatan->judul }}</h2>

            <img
                src="{{ asset('storage/' . $kegiatan->poster) }}"
                alt="Poster {{ $kegiatan->judul }}"
                width="200"
            >

            <p>Kategori: {{ $kegiatan->kategori }}</p>
            <p>Status: {{ $kegiatan->status_publikasi }}</p>
            <p>Waktu pelaksanaan: {{ $kegiatan->tanggal_pelaksanaan }}</p>
            <p>Lokasi: {{ $kegiatan->lokasi }}</p>
        </div>
        
        <p>
            Biaya pendaftaran:

            @if ($kegiatan->biaya_pendaftaran === null)
                Belum dicantumkan
            @elseif ($kegiatan->biaya_pendaftaran == 0)
                Gratis
            @else
                Rp {{ number_format($kegiatan->biaya_pendaftaran, 0, ',', '.') }}
            @endif
        </p>

        @if ($kegiatan->nomor_rekening)
            <p>Nomor rekening: {{ $kegiatan->nomor_rekening }}</p>
        @endif

        @if ($kegiatan->qris)
            <div>
                <p>QRIS pembayaran:</p>

                <img
                    src="{{ asset('storage/' . $kegiatan->qris) }}"
                    alt="QRIS pembayaran {{ $kegiatan->judul }}"
                    width="200"
                >
            </div>
        @endif
    @empty
        <p>Belum ada kegiatan untuk lembagamu.</p>
    @endforelse

    <a href="{{ route('admin.dashboard') }}">
        Kembali ke dashboard
    </a>
</body>
</html>