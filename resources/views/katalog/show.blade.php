<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $kegiatan->judul }} | SatuTitik</title>
</head>
<body>
    <h1>{{ $kegiatan->judul }}</h1>

    <img
        src="{{ asset('storage/' . $kegiatan->poster) }}"
        alt="Poster {{ $kegiatan->judul }}"
        width="300"
    >

    <p>Kategori: {{ $kegiatan->kategori }}</p>
    <p>Waktu pelaksanaan: {{ $kegiatan->tanggal_pelaksanaan }}</p>
    <p>Lokasi: {{ $kegiatan->lokasi }}</p>
    <p>Batas pendaftaran: {{ $kegiatan->batas_pendaftaran }}</p>

    <h2>Deskripsi Kegiatan</h2>

    <div style="white-space: pre-line;">{{ $kegiatan->deskripsi }}</div>

    <h2>Informasi Pembayaran</h2>

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

    @if (session('gagal'))
        <p role="alert">{{ session('gagal') }}</p>
    @endif

    <p>
        <a href="{{ route('pendaftaran.buka', [
            'id' => $kegiatan->id_kegiatan,
        ]) }}">
            Daftar Kegiatan
        </a>
    </p>

    <p>
        <a href="{{ route('katalog.index') }}">
            Kembali ke Katalog
        </a>
    </p>
</body>
</html>