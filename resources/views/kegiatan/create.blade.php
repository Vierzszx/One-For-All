<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>Tambah Kegiatan | SatuTitik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{box-sizing:border-box}body{margin:0;min-width:320px;background:#f6f7fa;color:#1b1d38;font-family:'DM Sans',sans-serif}a{color:inherit;text-decoration:none}button{font:inherit}.topbar{height:80px;background:#fff;display:flex;align-items:center;padding:0 32px;gap:36px;box-shadow:0 1px 0 #e8e8ed;position:relative;z-index:2}.brand{display:flex;align-items:center;gap:12px;font-size:25px;font-weight:800;letter-spacing:-1px;white-space:nowrap}.brand-logo{width:40px;height:40px;object-fit:contain}.nav{display:flex;align-items:center;justify-content:center;gap:16px;flex:1}.nav a{font-weight:700;padding:11px 24px;border-radius:12px}.nav a.active{background:#1b1d38;color:#fff}.account{display:flex;align-items:center;gap:12px}.avatar,.icon-button{width:40px;height:40px;border-radius:50%;background:#ededf0;display:grid;place-items:center;color:#1b1d38;flex:none}.avatar svg,.icon-button svg{width:19px;height:19px}.account-copy{display:flex;flex-direction:column;line-height:1.25;min-width:150px}.account-copy strong{font-size:13px}.account-copy span{font-size:12px;color:#666b80}.icon-button{border:0;cursor:pointer}.logout-form{margin:0}.hero{background:linear-gradient(110deg,#141526,#343c70);color:#fff;padding:38px max(4.5vw,32px) 36px}.hero h1{font-size:clamp(38px,4.5vw,62px);line-height:1.08;letter-spacing:-2.5px;margin:0 0 14px;font-weight:800}.hero p{font-size:clamp(16px,1.7vw,21px);line-height:1.5;margin:0;color:#f0f1f8}.content{padding:0 24px 64px}.form-card{width:min(980px,100%);margin:0 auto;position:relative;z-index:1;background:#fff;border-radius:24px;padding:52px 34px 32px;box-shadow:0 12px 26px #1b1d381f}.error-summary{margin-bottom:22px;padding:14px 18px;border-radius:12px;background:#fee8e8;color:#9c2424}.error-summary ul{margin:8px 0 0;padding-left:20px}.form-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px 22px}.field{display:flex;flex-direction:column;gap:8px;min-width:0}.field label,.field-label{font-size:11px;font-weight:700;letter-spacing:.02em;color:#202440;text-transform:uppercase}.field input,.field textarea{width:100%;min-width:0;border:1px solid transparent;border-radius:12px;background:#eceef2;padding:14px 16px;color:#1b1d38;font:500 15px 'DM Sans',sans-serif;outline:none}.field input{height:50px}.field textarea{min-height:110px;resize:vertical}.field input:focus,.field textarea:focus{border-color:#4146a3;box-shadow:0 0 0 3px #4146a31c}.field input[type=file]{height:auto;min-height:50px;padding:12px;border:1px dashed #c4cada;background:#fff}.field small,.hint{color:#687087;font-size:12px;line-height:1.45}.span-2{grid-column:1/-1}.payment{margin:28px 0 0;padding:18px 20px 20px;border:1px solid #d9dde6;border-radius:16px}.payment legend{padding:0 8px;font-size:14px;font-weight:700;color:#1b1d38}.payment-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px}.actions{display:flex;align-items:center;gap:20px;margin-top:24px}.submit-button{border:0;border-radius:11px;background:#1b1d38;color:#fff;padding:15px 26px;font-size:15px;font-weight:700;cursor:pointer}.back-link{color:#343cac;text-decoration:underline;font-weight:600;font-size:14px}html[data-theme="dark"] body,html[data-theme="dark"] .content{background:#111321;color:#f3f4fb}html[data-theme="dark"] .topbar,html[data-theme="dark"] .form-card{background:#1c1f32;color:#f3f4fb}html[data-theme="dark"] .account-copy span,html[data-theme="dark"] .field small,html[data-theme="dark"] .hint{color:#c2c5d4}html[data-theme="dark"] .field label,html[data-theme="dark"] .field-label,html[data-theme="dark"] .payment legend{color:#f3f4fb}html[data-theme="dark"] .field input,html[data-theme="dark"] .field textarea{background:#292d43;color:#f3f4fb}html[data-theme="dark"] .payment{border-color:#41465a}html[data-theme="dark"] .field input[type=file]{background:#24283a}
        @media(max-width:800px){.topbar{height:auto;min-height:72px;padding:14px 20px;gap:15px;flex-wrap:wrap}.brand{font-size:22px}.brand-logo{width:36px;height:36px}.nav{order:3;flex-basis:100%;justify-content:flex-start}.nav a{padding:9px 14px}.account{margin-left:auto;gap:8px}.account-copy{min-width:0}.account-copy strong{max-width:130px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.account .avatar{display:none}.hero{padding:32px 24px}.hero h1{letter-spacing:-1.5px}.form-card{padding:36px 24px 26px}.payment-grid{grid-template-columns:1fr 1fr}}
        @media(max-width:560px){.topbar{padding:12px 14px}.nav{gap:4px}.nav a{font-size:13px;padding:9px 12px}.account-copy span{display:none}.account-copy strong{max-width:100px;font-size:11px}.icon-button{width:34px;height:34px}.hero{padding:28px 20px}.hero h1{font-size:38px}.content{padding:0 14px 40px}.form-card{padding:28px 18px 22px;border-radius:18px}.form-grid,.payment-grid{grid-template-columns:1fr;gap:16px}.span-2{grid-column:auto}.actions{align-items:stretch;flex-direction:column}.submit-button{width:100%}.back-link{text-align:center}}
    </style>
    <style>
        #theme-toggle{width:40px;height:40px;border:0;border-radius:50%;display:grid;place-items:center;background:#e7e7ea;color:#1b1d38;cursor:pointer;transition:background-color .2s ease,transform .2s ease}
        #theme-toggle svg{width:22px;height:22px;display:block}
        #theme-toggle svg{width:24px;height:24px;display:block}
        #theme-toggle:hover{background:#d9dbe2;transform:scale(1.06)}
        html[data-theme="dark"] #theme-toggle{background:#34384c;color:#f3f4fb}
        html[data-theme="dark"] #theme-toggle:hover{background:#444961}
    </style>
</head>
<body>
    <header class="topbar">
        <a class="brand" href="{{ route('admin.dashboard') }}" aria-label="SatuTitik, Dashboard"><img src="{{ asset('assets/auth/student-imgVector5.svg') }}" alt="" class="brand-logo"><span>SatuTitik.</span></a>
        <nav class="nav" aria-label="Navigasi utama"><a href="{{ route('admin.dashboard') }}">Dashboard</a><a class="active" href="{{ route('kegiatan.index') }}" aria-current="page">Kelola Kegiatan</a></nav>
        <div class="account"><span class="avatar" aria-hidden="true"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-4.1 0-7 2.1-7 4.5V21h14v-2.5c0-2.4-2.9-4.5-7-4.5Z"/></svg></span><span class="account-copy"><strong>{{ auth()->user()->nama_lengkap }}</strong><span>{{ \Illuminate\Support\Facades\DB::table('lembaga')->where('id_lembaga', auth()->user()->id_lembaga)->value('nama_lembaga') ?? 'Admin Lembaga' }}</span></span><button class="icon-button" id="theme-toggle" type="button" aria-label="Aktifkan mode gelap" title="Aktifkan mode gelap"><svg id="theme-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M20.2 15.4A8.5 8.5 0 0 1 8.6 3.8 8.7 8.7 0 1 0 20.2 15.4Z"/></svg></button><form class="logout-form" method="POST" action="{{ route('logout') }}">@csrf<button class="icon-button" type="submit" aria-label="Keluar" title="Keluar"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 17v-2h4v-6h-4V7l-5 5 5 5Zm9-14H5a2 2 0 0 0-2 2v4h2V5h14v14H5v-4H3v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z"/></svg></button></form></div>
        <div class="account"><span class="avatar" aria-hidden="true"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-4.1 0-7 2.1-7 4.5V21h14v-2.5c0-2.4-2.9-4.5-7-4.5Z"/></svg></span><span class="account-copy"><strong>{{ auth()->user()->nama_lengkap }}</strong><span>{{ \Illuminate\Support\Facades\DB::table('lembaga')->where('id_lembaga', auth()->user()->id_lembaga)->value('nama_lembaga') ?? 'Admin Lembaga' }}</span></span><button class="icon-button" id="theme-toggle" type="button" aria-label="Aktifkan mode gelap" title="Aktifkan mode gelap"><svg id="theme-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg></button><form class="logout-form" method="POST" action="{{ route('logout') }}">@csrf<button class="icon-button" type="submit" aria-label="Keluar" title="Keluar"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 17v-2h4v-6h-4V7l-5 5 5 5Zm9-14H5a2 2 0 0 0-2 2v4h2V5h14v14H5v-4H3v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z"/></svg></button></form></div>
    </header>
    <main>
        <section class="hero"><h1>Tambah Kegiatan</h1><p>Isi detail kegiatan lembagamu. Kegiatan disimpan sebagai Draft sampai kamu menerbitkannya.</p></section>
        <section class="content">
            <div class="form-card">
                @if ($errors->any())
                    <div class="error-summary"><strong>Periksa kembali isian berikut:</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
                @endif
                <form method="POST" action="{{ route('kegiatan.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grid">
                        <div class="field"><label for="judul">Judul Kegiatan</label><input id="judul" name="judul" type="text" value="{{ old('judul') }}" maxlength="255" placeholder="Contoh: FILKOM Tech Fest" required></div>
                        <div class="field"><label for="kategori">Kategori</label><input id="kategori" name="kategori" type="text" value="{{ old('kategori') }}" maxlength="255" placeholder="Contoh: Seminar" required></div>
                        <div class="field span-2"><label for="deskripsi">Deskripsi</label><textarea id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi') }}</textarea></div>
                        <div class="field"><label for="tanggal_pelaksanaan">Tanggal Pelaksanaan</label><input id="tanggal_pelaksanaan" name="tanggal_pelaksanaan" type="datetime-local" value="{{ old('tanggal_pelaksanaan') }}" required></div>
                        <div class="field"><label for="lokasi">Lokasi</label><input id="lokasi" name="lokasi" type="text" value="{{ old('lokasi') }}" maxlength="255" placeholder="Contoh: Gedung G FILKOM UB" required></div>
                        <div class="field"><label for="batas_pendaftaran">Batas Pendaftaran</label><input id="batas_pendaftaran" name="batas_pendaftaran" type="datetime-local" value="{{ old('batas_pendaftaran') }}" required></div>
                        <div class="field"><label for="tautan_pendaftaran">Tautan Pendaftaran</label><input id="tautan_pendaftaran" name="tautan_pendaftaran" type="url" value="{{ old('tautan_pendaftaran') }}" placeholder="https://" required></div>
                        <div class="field span-2"><label for="poster">Poster Kegiatan</label><input id="poster" name="poster" type="file" accept=".jpg,.jpeg,.png" required><small>Format JPG atau PNG, maksimal 2 MB.</small></div>
                    </div>
                    <fieldset class="payment">
                        <legend>Informasi pembayaran (opsional)</legend>
                        <div class="payment-grid">
                            <div class="field"><label for="biaya_pendaftaran">Biaya Pendaftaran (Rp)</label><input id="biaya_pendaftaran" name="biaya_pendaftaran" type="number" min="0" max="999999999999" step="1" value="{{ old('biaya_pendaftaran') }}" placeholder="Contoh: 25000"><small>Isi 0 jika gratis.</small></div>
                            <div class="field"><label for="nomor_rekening">Nomor Rekening</label><input id="nomor_rekening" name="nomor_rekening" type="text" maxlength="100" value="{{ old('nomor_rekening') }}" placeholder="Masukkan nomor rekening"></div>
                            <div class="field"><label for="qris">Gambar QRIS</label><input id="qris" name="qris" type="file" accept=".jpg,.jpeg,.png"><small>Opsional, JPG/PNG maksimal 2 MB.</small></div>
                        </div>
                    </fieldset>
                    <div class="actions"><button class="submit-button" type="submit">Simpan Kegiatan</button><a class="back-link" href="{{ route('kegiatan.index') }}">Kembali ke Daftar Kegiatan</a></div>
                </form>
            </div>
        </section>
    </main>
    <script>
        (function () {
            var root = document.documentElement, button = document.getElementById('theme-toggle'), icon = document.getElementById('theme-icon');
            try { root.setAttribute('data-theme', localStorage.getItem('satutitik-theme') || 'light'); } catch (e) {}
            function render() { var dark = root.getAttribute('data-theme') === 'dark'; button.setAttribute('aria-label', dark ? 'Aktifkan mode terang' : 'Aktifkan mode gelap'); button.title = dark ? 'Aktifkan mode terang' : 'Aktifkan mode gelap'; icon.innerHTML = dark ? '<circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/>' : '<path d="M20.2 15.4A8.5 8.5 0 0 1 8.6 3.8 8.7 8.7 0 1 0 20.2 15.4Z"/>'; }
            function render() { var dark = root.getAttribute('data-theme') === 'dark'; button.setAttribute('aria-label', dark ? 'Aktifkan mode terang' : 'Aktifkan mode gelap'); button.title = dark ? 'Aktifkan mode terang' : 'Aktifkan mode gelap'; icon.innerHTML = dark ? '<circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/>' : '<path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>'; }
            render(); button.addEventListener('click', function () { root.setAttribute('data-theme', root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark'); try { localStorage.setItem('satutitik-theme', root.getAttribute('data-theme')); } catch (e) {} render(); });
        })();
    </script>
</body>
</html>