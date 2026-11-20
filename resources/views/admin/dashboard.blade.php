<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin | SatuTitik</title>
</head>
<body>
    <h1>Dashboard Admin Lembaga</h1>

    <p>Halo, {{ $pengguna->nama_lengkap }}.</p>
    <p>Lembaga: {{ $lembaga->nama_lembaga }}</p>

    <h2>Ringkasan Kegiatan</h2>

    <p>Total kegiatan: {{ $totalKegiatan }}</p>
    <p>Kegiatan Draft: {{ $jumlahDraft }}</p>

    <h2>Kegiatan Terakhir Diperbarui</h2>

    @forelse ($kegiatanTerbaru as $kegiatan)
        <div>
            <h3>{{ $kegiatan->judul }}</h3>

            <img
                src="{{ asset('storage/' . $kegiatan->poster) }}"
                alt="Poster {{ $kegiatan->judul }}"
                width="200"
            >

            <p>Status: {{ $kegiatan->status_publikasi }}</p>
            <p>Terakhir diperbarui: {{ $kegiatan->updated_at }}</p>
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
        </div>
    @empty
        <p>Belum ada kegiatan untuk lembagamu.</p>
    @endforelse

    <p>
        <a href="{{ route('kegiatan.index') }}">
            Kelola Kegiatan
        </a>
    </p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</body>
</html>