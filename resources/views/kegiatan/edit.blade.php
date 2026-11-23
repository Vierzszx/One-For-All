<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Kegiatan | SatuTitik</title>
</head>
<body>
    <h1>Edit Kegiatan</h1>

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
        action="{{ route('kegiatan.update', ['id' => $kegiatan->id_kegiatan]) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div>
            <label for="judul">Judul kegiatan</label>
            <input
                id="judul"
                name="judul"
                type="text"
                value="{{ old('judul', $kegiatan->judul) }}"
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
                value="{{ old('kategori', $kegiatan->kategori) }}"
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
            >{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
        </div>

        <div>
            <label for="tanggal_pelaksanaan">Waktu pelaksanaan</label>
            <input
                id="tanggal_pelaksanaan"
                name="tanggal_pelaksanaan"
                type="datetime-local"
                value="{{ old('tanggal_pelaksanaan', \Illuminate\Support\Carbon::parse($kegiatan->tanggal_pelaksanaan)->format('Y-m-d\TH:i')) }}"
                required
            >
        </div>

        <div>
            <label for="lokasi">Lokasi</label>
            <input
                id="lokasi"
                name="lokasi"
                type="text"
                value="{{ old('lokasi', $kegiatan->lokasi) }}"
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
                value="{{ old('batas_pendaftaran', \Illuminate\Support\Carbon::parse($kegiatan->batas_pendaftaran)->format('Y-m-d\TH:i')) }}"
                required
            >
        </div>

        <div>
            <label for="tautan_pendaftaran">Tautan pendaftaran</label>
            <input
                id="tautan_pendaftaran"
                name="tautan_pendaftaran"
                type="url"
                value="{{ old('tautan_pendaftaran', $kegiatan->tautan_pendaftaran) }}"
                required
            >
        </div>

        <div>
            <p>Poster saat ini:</p>

            <img
                src="{{ asset('storage/' . $kegiatan->poster) }}"
                alt="Poster {{ $kegiatan->judul }}"
                width="200"
            >

            <p>
                <label for="poster">Ganti poster</label>
                <input
                    id="poster"
                    name="poster"
                    type="file"
                    accept=".jpg,.jpeg,.png"
                >
            </p>

            <p>Kosongkan jika tetap memakai poster lama. Maksimal 2 MB.</p>
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
                    value="{{ old('biaya_pendaftaran', $kegiatan->biaya_pendaftaran) }}"
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
                    value="{{ old('nomor_rekening', $kegiatan->nomor_rekening) }}"
                >
            </div>

            <div>
                @if ($kegiatan->qris)
                    <p>QRIS saat ini:</p>

                    <img
                        src="{{ asset('storage/' . $kegiatan->qris) }}"
                        alt="QRIS {{ $kegiatan->judul }}"
                        width="200"
                    >
                @endif

                <p>
                    <label for="qris">Unggah atau ganti QRIS</label>
                    <input
                        id="qris"
                        name="qris"
                        type="file"
                        accept=".jpg,.jpeg,.png"
                    >
                </p>

                <p>Kosongkan jika tetap memakai QRIS lama. Maksimal 2 MB.</p>
            </div>
        </fieldset>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <p>
        <a href="{{ route('kegiatan.index') }}">
            Kembali ke Daftar Kegiatan
        </a>
    </p>
</body>
</html>