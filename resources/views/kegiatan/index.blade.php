<!DOCTYPE html>>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kegiatan Lembaga Saya | FILKOM satu titik</title>
</head>
<body>
    <h1>Kegiatan Lembaga Saya</h1>
    <p>Admin: {{ auth()->user()->nama_lengkap }}</p>

    @forelse ($daftarKegiatan as $kegiatan)
        <article>
            <h2>{{ $kegiatan->judul }}</h2>
            <p>kategori: {{ $kegiatan->kategori }}</p>
            <p>Status: {{ $kegiatan->status_publikasi }}</p>
        </article>
    @empty
        <p>Belum ada kegiatan</p>
    @endforelse

    <a href="{{ route('dashboard') }}">Kembali ke dashboard</a>
</body>
</html>