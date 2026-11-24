<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Kegiatan | SatuTitik</title>
</head>
<body>
    <h1>Katalog Kegiatan FILKOM</h1>

    @forelse ($daftarKegiatan as $kegiatan)
        <p>
            <a href="{{ route('katalog.show', [
                'id' => $kegiatan->id_kegiatan,
            ]) }}">
                Lihat Detail
            </a>
        </p>

        <article>
            <h2>{{ $kegiatan->judul }}</h2>
            <p>Kategori: {{ $kegiatan->kategori }}</p>
            <p>Waktu pelaksanaan: {{ $kegiatan->tanggal_pelaksanaan }}</p>
            <p>Lokasi: {{ $kegiatan->lokasi }}</p>

            <img
                src="{{ asset('storage/' . $kegiatan->poster) }}"
                alt="Poster {{ $kegiatan->judul }}"
                width="200"
            >
        </article>
    @empty
        <p>Belum ada kegiatan yang diterbitkan.</p>
    @endforelse
</body>
</html>