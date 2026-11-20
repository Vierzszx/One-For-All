<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Kegiatan | SatuTitik</title>
</head>
<body>
    <h1>Tambah Kegiatan</h1>

    @if ($errors->any())
        <div>
            <p>Periksa kembali isian berikut:</p>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        method="POST"
        action="{{ route('kegiatan.store') }}"
        enctype="multipart/form-data"
    >
        @csrf

        <div>
            <label for="judul">Judul kegiatan</label>
            <input
                id="judul"
                name="judul"
                type="text"
                value="{{ old('judul') }}"
                maxlength="255"
                required
            >
        </div>

        <div>
            <label for="kategori">Kategori</label>
            <input
                id="kategori"
                name="kategori"
                type="text"
                value="{{ old('kategori') }}"
                maxlength="255"
                required
            >
        </div>

        <div>
            <label for="deskripsi">Deskripsi</label>
            <textarea
                id="deskripsi"
                name="deskripsi"
                rows="5"
                required
            >{{ old('deskripsi') }}</textarea>
        </div>

        <div>
            <label for="tanggal_pelaksanaan">Tanggal pelaksanaan</label>
            <input
                id="tanggal_pelaksanaan"
                name="tanggal_pelaksanaan"
                type="datetime-local"
                value="{{ old('tanggal_pelaksanaan') }}"
                required
            >
        </div>

        <div>
            <label for="lokasi">Lokasi</label>
            <input
                id="lokasi"
                name="lokasi"
                type="text"
                value="{{ old('lokasi') }}"
                maxlength="255"
                required
            >
        </div>

        <div>
            <label for="batas_pendaftaran">Batas pendaftaran</label>
            <input
                id="batas_pendaftaran"
                name="batas_pendaftaran"
                type="datetime-local"
                value="{{ old('batas_pendaftaran') }}"
                required
            >
        </div>

        <div>
            <label for="tautan_pendaftaran">Tautan pendaftaran</label>
            <input
                id="tautan_pendaftaran"
                name="tautan_pendaftaran"
                type="url"
                value="{{ old('tautan_pendaftaran') }}"
                required
            >
        </div>

        <div>
            <label for="poster">Poster kegiatan</label>
            <input
                id="poster"
                name="poster"
                type="file"
                accept=".jpg,.jpeg,.png"
                required
            >
            <p>Format JPG atau PNG, maksimal 2 MB.</p>
        </div>

    <fieldset>
        <legend>Informasi pembayaran — opsional</legend>

        <div>
            <label for="biaya_pendaftaran">Biaya pendaftaran (Rp)</label>
            <input
                id="biaya_pendaftaran"
                name="biaya_pendaftaran"
                type="number"
                min="0"
                max="999999999999"
                step="1"
                value="{{ old('biaya_pendaftaran') }}"
                placeholder="Contoh: 25000"
            >
    
            <p>Boleh dikosongkan. Isi 0 jika kegiatan gratis.</p>
        </div>
    
        <div>
            <label for="nomor_rekening">Nomor rekening</label>
            <input
                id="nomor_rekening"
                name="nomor_rekening"
                type="text"
                maxlength="100"
                value="{{ old('nomor_rekening') }}"
                placeholder="Masukkan nomor rekening"
            >
        </div>
    
        <div>
            <label for="qris">Gambar QRIS</label>
            <input
                id="qris"
                name="qris"
                type="file"
                accept=".jpg,.jpeg,.png"
            >
    
            <p>Opsional. Format JPG atau PNG, maksimal 2 MB.</p>
        </div>
    </fieldset>

        <button type="submit">Simpan Kegiatan</button>
    </form>

    <p>
        <a href="{{ route('kegiatan.index') }}">
            Kembali ke Daftar Kegiatan
        </a>
    </p>
</body>
</html>