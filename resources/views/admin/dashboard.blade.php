<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>Dashboard Admin | SatuTitik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root{font-family:'DM Sans',sans-serif;color:#1b1d38;background:#f5f6fa;font-synthesis:none;font-optical-sizing:auto}*{box-sizing:border-box}body{margin:0;min-width:320px;background:#f5f6fa}a{color:inherit;text-decoration:none}button{font:inherit}.topbar{height:80px;background:#fff;display:flex;align-items:center;padding:0 32px;gap:36px;box-shadow:0 1px 0 #e8e8ed;position:relative;z-index:2}.brand{display:flex;align-items:center;gap:12px;font-size:25px;font-weight:800;letter-spacing:-1px;white-space:nowrap}.brand-mark{width:34px;height:34px;display:grid;place-items:center;transform:rotate(45deg);border-radius:9px;background:#1b1d38;box-shadow:3px -3px 0 #fb654a}.brand-mark span{transform:rotate(-45deg);color:white;font-size:15px}.nav{display:flex;align-items:center;justify-content:center;gap:16px;flex:1}.nav a{font-weight:700;padding:11px 24px;border-radius:12px}.nav a.active{background:#1b1d38;color:white}.account{display:flex;align-items:center;gap:12px}.avatar,.icon-button{width:40px;height:40px;border-radius:50%;background:#ededf0;display:grid;place-items:center;color:#1b1d38;flex:none}.avatar svg,.icon-button svg{width:19px;height:19px}.account-copy{display:flex;flex-direction:column;line-height:1.25;min-width:150px}.account-copy strong{font-size:13px}.account-copy span{font-size:12px;color:#666b80}.icon-button{border:0;cursor:pointer}.logout-form{margin:0}.hero{background:linear-gradient(110deg,#141526,#343c70);color:#fff;padding:32px max(4.5vw,32px) 26px}.hero h1{font-size:clamp(34px,4vw,54px);line-height:1.08;letter-spacing:-2px;margin:0 0 14px;font-weight:800}.hero p{font-size:clamp(16px,1.5vw,19px);line-height:1.45;max-width:1120px;margin:0;color:#f0f1f8}.stats{display:flex;justify-content:center;gap:48px;margin:22px auto 0}.stat{display:flex;align-items:center;gap:18px;background:#fff;color:#151515;border-radius:20px;min-width:230px;padding:18px 26px;box-shadow:0 8px 22px #10132220}.stat svg{width:32px;height:32px;flex:none}.stat-label{display:block;color:#6b6b6b;font-size:14px;font-weight:700}.stat strong{font-size:25px;line-height:1.15}.content{padding:34px 3vw 72px;min-height:52vh}.cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,320px),420px));justify-content:center;gap:clamp(24px,4vw,64px);align-items:start}.event-card{height:540px;perspective:1200px;outline:none}.card-inner{height:100%;width:100%;position:relative;transition:transform .75s cubic-bezier(.2,.75,.25,1);transform-style:preserve-3d;border-radius:28px;box-shadow:0 12px 24px #1b1d3824}.event-card:hover .card-inner,.event-card:focus-within .card-inner,.event-card:focus .card-inner{transform:rotateY(180deg)}.card-face{position:absolute;inset:0;border-radius:28px;overflow:hidden;backface-visibility:hidden;-webkit-backface-visibility:hidden;background:#fff}.card-front{background:#d8d8d8}.card-front img{display:block;width:100%;height:100%;object-fit:cover}.status{position:absolute;top:18px;right:18px;display:flex;align-items:center;gap:9px;padding:10px 17px;border-radius:999px;color:#fff;font-size:14px;font-weight:700;box-shadow:0 4px 9px #1112}.status:before{content:'';width:12px;height:12px;background:#fff;border-radius:50%}.status.open{background:#4146a3}.status.closed{background:#f12c32}.card-back{transform:rotateY(180deg);padding:24px;display:flex;flex-direction:column}.back-top{display:flex;justify-content:space-between;align-items:center;gap:12px}.org{font-size:14px;font-weight:700}.dept{font-size:14px;color:#6d7181;margin-top:3px}.back-title{font-size:23px;line-height:1.3;letter-spacing:-.4px;margin:24px 0 12px;color:#151515}.detail{display:flex;align-items:flex-start;gap:9px;margin:0 0 12px;font-size:14px;line-height:1.45;color:#333}.detail svg{width:16px;height:16px;flex:none;color:#343cac}.fee{margin-top:auto;border-top:1px solid #ececf1;padding-top:14px}.fee span{display:block;font-size:14px;font-weight:600;color:#555}.fee strong{display:block;font-size:19px;color:#111;margin-top:2px}.edit-link{font-size:12px;font-weight:700;color:#343cac}.empty{grid-column:1/-1;border:1px dashed #c8cad4;background:#fff;border-radius:22px;padding:40px;text-align:center;color:#676b7b}.empty h2{margin:0 0 8px;color:#1b1d38}.empty a{display:inline-block;margin-top:12px;background:#1b1d38;color:#fff;border-radius:10px;padding:11px 17px;font-weight:700}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
        @media(max-width:800px){.topbar{height:auto;min-height:72px;padding:14px 20px;gap:15px;flex-wrap:wrap}.brand{font-size:22px}.nav{order:3;flex-basis:100%;justify-content:flex-start}.nav a{padding:9px 14px}.account{margin-left:auto;gap:8px}.account-copy{min-width:0}.account-copy strong{max-width:130px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.account .avatar{display:none}.hero{padding:34px 24px 30px}.hero h1{letter-spacing:-1.5px}.stats{gap:14px;flex-wrap:wrap}.stat{min-width:210px;flex:1;padding:18px}.cards{grid-template-columns:repeat(auto-fit,minmax(min(100%,320px),420px));justify-content:center;gap:24px}.event-card{height:510px}}
        @media(max-width:500px){.account-copy span{display:none}.account-copy strong{max-width:100px;font-size:11px}.topbar{padding:12px 14px}.nav{gap:4px}.nav a{font-size:13px;padding:9px 12px}.icon-button{width:34px;height:34px}.hero{padding:30px 20px}.stat{min-width:100%;}.content{padding:24px 18px 48px}.cards{grid-template-columns:1fr}.event-card{height:500px}}
        .event-card{cursor:pointer}.card-inner{transition:transform .75s cubic-bezier(.23,1,.32,1)}.card-face{background:#fff}.card-back{padding:0;display:flex;flex-direction:column}.back-poster{height:42%;flex:none;background:#d8d8d8;overflow:hidden}.back-poster img{width:100%;height:100%;object-fit:cover;display:block}.back-content{padding:18px 24px 20px;display:flex;flex:1;min-height:0;flex-direction:column}.fee strong{min-height:22px}@media(hover:hover){.event-card:hover .card-inner{transform:rotateY(180deg)}}@media(hover:none){.event-card:hover .card-inner{transform:none}}.event-card.is-flipped .card-inner{transform:rotateY(180deg)}@media(prefers-reduced-motion:reduce){.card-inner{transition:none}}
        html[data-theme="dark"] body,html[data-theme="dark"] .content{background:#111321;color:#f3f4fb}html[data-theme="dark"] .topbar,html[data-theme="dark"] .card-back,html[data-theme="dark"] .empty{background:#1c1f32;color:#f3f4fb}html[data-theme="dark"] .card-back .back-title,html[data-theme="dark"] .card-back .fee strong{color:#fff}html[data-theme="dark"] .card-back .detail,html[data-theme="dark"] .card-back .dept,html[data-theme="dark"] .card-back .fee span,html[data-theme="dark"] .account-copy span{color:#c2c5d4}html[data-theme="dark"] .card-back .fee{border-color:#34384c}html[data-theme="dark"] .empty h2{color:#fff}
    </style>
    <style>
        .nav a{transition:color .18s ease,background-color .18s ease,transform .18s ease}
        .nav a:not(.active):hover,.nav a:not(.active):focus-visible{color:#4146a3;background:#f0f1fa}
        .nav a:not(.active):active{transform:scale(.97)}
        .nav a:focus-visible{outline:2px solid #777ce0;outline-offset:3px}
    </style>
    <style>
        .brand-logo{width:40px;height:40px;display:block;object-fit:contain;flex:none}
        @media(max-width:800px){.brand-logo{width:36px;height:36px}}
        #theme-toggle{width:40px;height:40px;border:0;border-radius:50%;display:grid;place-items:center;background:#e7e7ea;color:#1b1d38;cursor:pointer;transition:background-color .2s ease,transform .2s ease}
        #theme-toggle svg{width:24px;height:24px;display:block}
        #theme-toggle:hover{background:#d9dbe2;transform:scale(1.06)}
        html[data-theme="dark"] #theme-toggle{background:#34384c;color:#f3f4fb}
        html[data-theme="dark"] #theme-toggle:hover{background:#444961}
        .card-inner{box-shadow:0 14px 28px rgba(27,29,56,.2),0 5px 12px rgba(27,29,56,.12);transition:transform .75s cubic-bezier(.23,1,.32,1),box-shadow .25s ease}
        @media(hover:hover){.event-card:hover .card-inner{box-shadow:0 20px 36px rgba(16,18,40,.3),0 8px 18px rgba(16,18,40,.18)}}
    </style>
</head>
<body>
    <header class="topbar">
        <a class="brand" href="{{ route('admin.dashboard') }}" aria-label="SatuTitik, Dashboard">
            <img src="{{ asset('assets/auth/student-imgVector5.svg') }}" alt="" class="brand-logo"><span>SatuTitik.</span>
        </a>
        <nav class="nav" aria-label="Navigasi utama">
            <a class="active" href="{{ route('admin.dashboard') }}" aria-current="page">Dashboard</a>
            <a href="{{ route('kegiatan.index') }}">Kelola Kegiatan</a>
        </nav>
        <div class="account">
            <span class="avatar" aria-hidden="true"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-4.1 0-7 2.1-7 4.5V21h14v-2.5c0-2.4-2.9-4.5-7-4.5Z"/></svg></span>
            <span class="account-copy"><strong>{{ $pengguna->nama_lengkap }}</strong><span>{{ $lembaga->nama_lembaga ?? 'Admin Lembaga' }}</span></span>
            <button class="icon-button" id="theme-toggle" type="button" aria-label="Aktifkan mode gelap" title="Aktifkan mode gelap"><svg id="theme-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg></button>
            <form class="logout-form" method="POST" action="{{ route('logout') }}">@csrf<button class="icon-button" type="submit" aria-label="Keluar" title="Keluar"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 17v-2h4v-6h-4V7l-5 5 5 5Zm9-14H5a2 2 0 0 0-2 2v4h2V5h14v14H5v-4H3v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z"/></svg></button></form>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Selamat Datang, {{ $lembaga->nama_lembaga ?? 'Admin' }}!</h1>
            <p>Publikasikan dan kelola informasi berbagai kegiatan dari lembaga Anda untuk seluruh mahasiswa Fakultas Ilmu Komputer Universitas Brawijaya.</p>
            <div class="stats" aria-label="Ringkasan kegiatan">
                <div class="stat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18M8 14h3M8 17h6"/></svg><div><span class="stat-label">Total Kegiatan</span><strong>{{ $totalKegiatan }}</strong></div></div>
                <div class="stat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 4H5a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-2"/><path d="M9 3h9l4 4v11a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z"/><path d="M18 3v5h4"/></svg><div><span class="stat-label">Kegiatan Draft</span><strong>{{ $jumlahDraft }}</strong></div></div>
            </div>
        </section>

        <section class="content" aria-label="Kegiatan terbaru">
            <div class="cards">
                @forelse ($kegiatanTerbaru as $kegiatan)
                    @php($pendaftaranTerbuka = $kegiatan->batas_pendaftaran && now()->lte(\Illuminate\Support\Carbon::parse($kegiatan->batas_pendaftaran)) && $kegiatan->status_publikasi === 'Terbit')
                    <article class="event-card" tabindex="0" aria-label="{{ $kegiatan->judul }}. Arahkan kursor atau fokus untuk melihat detail.">
                        <div class="card-inner">
                            <div class="card-face card-front">
                                @if ($kegiatan->poster)<img src="{{ asset('storage/' . $kegiatan->poster) }}" alt="Poster {{ $kegiatan->judul }}" loading="lazy">@endif
                                <span class="status {{ $pendaftaranTerbuka ? 'open' : 'closed' }}">{{ $pendaftaranTerbuka ? 'OPEN' : 'CLOSED' }}</span>
                            </div>
                            <div class="card-face card-back">
                                <div class="back-poster">
                                    @if ($kegiatan->poster)
                                        <img src="{{ asset('storage/' . $kegiatan->poster) }}" alt="">
                                    @endif
                                </div>
                                <div class="back-content">
                                <div class="back-top"><div><div class="org">{{ $lembaga->nama_lembaga ?? 'SatuTitik' }}</div><div class="dept">• {{ $kegiatan->kategori }}</div></div></div>
                                <h2 class="back-title">{{ $kegiatan->judul }}</h2>
                                <p class="detail"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Pendaftaran sampai {{ \Illuminate\Support\Carbon::parse($kegiatan->batas_pendaftaran)->translatedFormat('d M Y') }}<br>Pelaksanaan {{ \Illuminate\Support\Carbon::parse($kegiatan->tanggal_pelaksanaan)->translatedFormat('d M Y') }}</span></p>
                                <p class="detail"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg><span>{{ $kegiatan->lokasi }}</span></p>
                                <p class="detail"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M15.5 8.5c-.7-.8-1.8-1.2-3-1.2-1.7 0-3 .8-3 2s1.3 1.8 3 2 3 .8 3 2-1.3 2-3 2c-1.2 0-2.3-.4-3-1.2M12.5 5.5v13"/></svg><span>{{ $kegiatan->status_publikasi }}</span></p>
                                <div class="fee">
                                    <span>Biaya Registrasi</span>
                                    <strong>
                                        @if ($kegiatan->biaya_pendaftaran === null)
                                            Belum dicantumkan
                                        @elseif ($kegiatan->biaya_pendaftaran == 0)
                                            Gratis
                                        @else
                                            Rp {{ number_format($kegiatan->biaya_pendaftaran, 0, ',', '.') }}
                                        @endif
                                    </strong>
                                </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="empty"><h2>Belum ada kegiatan</h2><p>Kegiatan yang Anda tambahkan akan tampil di sini sebagai kartu poster.</p><a href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a></div>
                @endforelse
            </div>
        </section>
    </main>
    <script>
        document.querySelectorAll('.event-card').forEach(function (card) {
            card.addEventListener('click', function (event) {
                if (event.target.closest('a, button, form')) return;
                if (window.matchMedia('(hover: none)').matches) {
                    card.classList.toggle('is-flipped');
                }
            });
            card.addEventListener('keydown', function (event) {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    card.classList.toggle('is-flipped');
                }
            });
        });
        (function () {
            var root = document.documentElement;
            var button = document.getElementById('theme-toggle');
            var icon = document.getElementById('theme-icon');
            try { root.setAttribute('data-theme', localStorage.getItem('satutitik-theme') || 'light'); } catch (e) {}
            function renderTheme() {
                var dark = root.getAttribute('data-theme') === 'dark';
                button.setAttribute('aria-label', dark ? 'Aktifkan mode terang' : 'Aktifkan mode gelap');
                button.title = dark ? 'Aktifkan mode terang' : 'Aktifkan mode gelap';
                icon.innerHTML = dark
                    ? '<circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.93 4.93l1.42 1.42m11.3 11.3 1.42 1.42M2 12h2m16 0h2M4.93 19.07l1.42-1.42m11.3-11.3 1.42-1.42"/>'
                    : '<path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>';
            }
            renderTheme();
            button.addEventListener('click', function () {
                root.setAttribute('data-theme', root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
                try { localStorage.setItem('satutitik-theme', root.getAttribute('data-theme')); } catch (e) {}
                renderTheme();
            });
        })();
    </script>
</body>
</html>