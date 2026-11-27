<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>Kelola Kegiatan | SatuTitik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{box-sizing:border-box}body{margin:0;min-width:320px;background:#f6f7fa;color:#1b1d38;font-family:'DM Sans',sans-serif}a{color:inherit;text-decoration:none}button{font:inherit}.topbar{height:80px;background:#fff;display:flex;align-items:center;padding:0 32px;gap:36px;box-shadow:0 1px 0 #e8e8ed;position:relative;z-index:2}.brand{display:flex;align-items:center;gap:12px;font-size:25px;font-weight:800;letter-spacing:-1px;white-space:nowrap}.brand-mark{width:34px;height:34px;display:grid;place-items:center;transform:rotate(45deg);border-radius:9px;background:#1b1d38;box-shadow:3px -3px 0 #fb654a}.brand-mark span{transform:rotate(-45deg);color:white}.nav{display:flex;align-items:center;justify-content:center;gap:16px;flex:1}.nav a{font-weight:700;padding:11px 24px;border-radius:12px}.nav a.active{background:#1b1d38;color:white}.account{display:flex;align-items:center;gap:12px}.avatar,.icon-button{width:40px;height:40px;border-radius:50%;background:#ededf0;display:grid;place-items:center;color:#1b1d38;flex:none}.avatar svg,.icon-button svg{width:19px;height:19px}.account-copy{display:flex;flex-direction:column;line-height:1.25;min-width:150px}.account-copy strong{font-size:13px}.account-copy span{font-size:12px;color:#666b80}.icon-button{border:0;cursor:pointer}.logout-form{margin:0}.hero{background:linear-gradient(110deg,#141526,#343c70);color:#fff;padding:42px max(4.5vw,32px) 36px}.hero h1{font-size:clamp(36px,4.5vw,62px);line-height:1.08;letter-spacing:-2.5px;margin:0 0 14px;font-weight:800}.hero p{font-size:clamp(16px,1.7vw,21px);line-height:1.5;max-width:1120px;margin:0;color:#f0f1f8}.stats{display:flex;justify-content:center;gap:78px;margin:30px auto 0}.stat{display:flex;align-items:center;gap:18px;background:#fff;color:#151515;border-radius:20px;min-width:250px;padding:22px 30px;box-shadow:0 8px 22px #10132220}.stat svg{width:32px;height:32px;flex:none}.stat-label{display:block;color:#6b6b6b;font-size:14px;font-weight:700}.stat strong{font-size:25px;line-height:1.15}.content{padding:32px 3vw 72px;min-height:50vh}.toolbar{display:flex;justify-content:flex-end;margin-bottom:30px}.add-button{display:flex;align-items:center;gap:12px;border:0;border-radius:14px;background:#292b4a;color:#fff;padding:15px 26px;font-size:18px;font-weight:700}.add-button svg{width:21px;height:21px}.alert{border-radius:12px;padding:14px 18px;margin:0 0 32px;font-size:14px;font-weight:600}.alert.success{background:#e0f5e9;color:#17683c}.alert.error{background:#fee8e8;color:#9c2424}.cards{display:grid;grid-template-columns:repeat(auto-fill,minmax(min(100%,320px),1fr));gap:clamp(24px,6vw,88px);align-items:start}.event-card{overflow:hidden;background:#fff;border-radius:28px;box-shadow:0 10px 22px #1b1d3824}.poster-wrap{height:290px;position:relative;background:#d8d8d8}.poster{display:block;width:100%;height:100%;object-fit:cover}.status{position:absolute;top:18px;right:18px;display:flex;align-items:center;gap:9px;padding:10px 17px;border-radius:999px;color:#fff;font-size:14px;font-weight:700;box-shadow:0 4px 9px #1112}.status:before{content:'';width:12px;height:12px;background:#fff;border-radius:50%}.status.open{background:#4146a3}.status.closed{background:#f12c32}.status.draft{background:#5a666d}.card-body{padding:18px 22px 20px}.card-actions{margin:0 0 14px}.action-button{width:min(100%,242px);min-height:39px;border:0;border-radius:8px;background:#4146a3;color:white;font-size:13px;font-weight:700;cursor:pointer}.action-button.danger{background:#f12c32}.org-line,.info-line{display:flex;align-items:flex-start;gap:8px;color:#282a39;font-size:12px;line-height:1.45;margin:0 0 10px}.org-line{font-size:11px}.org-line svg,.info-line svg{width:15px;height:15px;flex:none;color:#343cac}.card-title{font-size:17px;line-height:1.35;color:#111;margin:0 0 12px;font-weight:500}.card-footer{display:flex;justify-content:space-between;align-items:flex-end;gap:12px;margin-top:18px}.fee span{display:block;font-size:11px;font-weight:600;color:#444}.fee strong{display:block;font-size:17px;color:#111}.edit-link{background:#292b4a;color:white;padding:10px 15px;border-radius:8px;font-size:13px;font-weight:600;white-space:nowrap}.empty{grid-column:1/-1;border:1px dashed #c8cad4;background:#fff;border-radius:22px;padding:40px;text-align:center;color:#676b7b}.empty h2{margin:0 0 8px;color:#1b1d38}.empty a{display:inline-block;margin-top:12px;background:#1b1d38;color:#fff;border-radius:10px;padding:11px 17px;font-weight:700}
        @media(max-width:800px){.topbar{height:auto;min-height:72px;padding:14px 20px;gap:15px;flex-wrap:wrap}.brand{font-size:22px}.nav{order:3;flex-basis:100%;justify-content:flex-start}.nav a{padding:9px 14px}.account{margin-left:auto;gap:8px}.account-copy{min-width:0}.account-copy strong{max-width:130px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.account .avatar{display:none}.hero{padding:34px 24px 30px}.hero h1{letter-spacing:-1.5px}.stats{gap:14px;flex-wrap:wrap}.stat{min-width:210px;flex:1;padding:18px}.cards{gap:24px}}
        @media(max-width:500px){.account-copy span{display:none}.account-copy strong{max-width:100px;font-size:11px}.topbar{padding:12px 14px}.nav{gap:4px}.nav a{font-size:13px;padding:9px 12px}.hero{padding:30px 20px}.stat{min-width:100%}.content{padding:24px 18px 48px}.toolbar{margin-bottom:22px}.add-button{width:100%;justify-content:center}.cards{grid-template-columns:1fr}.poster-wrap{height:290px}}
        .event-card{width:100%;max-width:390px;height:auto;aspect-ratio:3/4;overflow:visible;background:transparent;border-radius:0;box-shadow:none;perspective:1200px;cursor:pointer;outline:none}.card-inner{position:relative;width:100%;height:100%;transition:transform .75s cubic-bezier(.23,1,.32,1);transform-style:preserve-3d;border-radius:28px;box-shadow:0 18px 38px -10px rgba(15,23,42,.14),0 6px 14px -4px rgba(15,23,42,.06)}.card-face{position:absolute;inset:0;width:100%;height:100%;overflow:hidden;border-radius:28px;-webkit-backface-visibility:hidden;backface-visibility:hidden}.card-front{background:#cbd5e1;border:1px solid rgba(255,255,255,.6)}.card-front .poster{width:100%;height:100%;object-fit:cover;display:block}.card-back{background:#fff;transform:rotateY(180deg);display:flex;flex-direction:column;border:1px solid rgba(226,232,240,.9)}.back-banner{position:relative;height:42%;width:100%;flex:none;overflow:hidden;background:#d1d5db}.back-banner img{width:100%;height:100%;object-fit:cover;display:block}.back-banner-tint{position:absolute;inset:0;background:linear-gradient(to bottom,rgba(15,23,42,.18),rgba(15,23,42,.05))}.back-body{position:relative;z-index:1;flex:1;min-height:0;padding:18px 22px 20px;display:flex;flex-direction:column;justify-content:space-between;background:#fff}.card-body .org-line,.card-body .info-line,.card-body .card-title,.card-body .fee span,.card-body .fee strong{color:#282a39}.card-body .org-line svg,.card-body .info-line svg{color:#343cac}.card-body .edit-link{background:#292b4a;color:#fff}.card-actions{text-align:center;margin:0 0 10px}.card-footer{margin-top:12px;padding-top:10px;border-top:1px solid #f1f5f9}.poster{display:block}.brand-logo{width:40px;height:40px;display:block;object-fit:contain;flex:none}.hero{padding:32px max(4.5vw,32px) 26px}.hero h1{font-size:clamp(34px,4vw,54px);line-height:1.08;letter-spacing:-2px;margin:0 0 14px;font-weight:800}.hero p{font-size:clamp(16px,1.5vw,19px);line-height:1.45;max-width:1120px;margin:0;color:#f0f1f8}.stats{gap:48px;margin:22px auto 0}.stat{min-width:230px;padding:18px 26px}.cards{grid-template-columns:repeat(auto-fit,minmax(min(100%,300px),390px));justify-content:center;gap:clamp(24px,4vw,64px)}@media(hover:hover){.event-card:hover .card-inner{transform:rotateY(180deg)}}@media(hover:none){.event-card:hover .card-inner{transform:none}}.event-card:focus .card-inner,.event-card:focus-within .card-inner{transform:none}.event-card.is-flipped .card-inner{transform:rotateY(180deg)}@media(max-width:800px){.hero{padding:34px 24px 30px}.hero h1{letter-spacing:-1.5px}.stats{gap:14px;flex-wrap:wrap}.stat{min-width:210px;flex:1;padding:18px}.cards{grid-template-columns:repeat(auto-fit,minmax(min(100%,300px),390px));justify-content:center;gap:24px}.event-card{height:auto;aspect-ratio:3/4}}@media(max-width:500px){.hero{padding:30px 20px}.stat{min-width:100%}.content{padding:24px 18px 48px}.cards{grid-template-columns:minmax(0,390px);justify-content:center}.event-card{height:auto;aspect-ratio:3/4}}@media(prefers-reduced-motion:reduce){.card-inner{transition:none}}
            .activity-card{width:100%;max-width:390px;aspect-ratio:3/4;transition:transform .2s ease}.activity-card:hover{transform:translateY(-3px)}.activity-poster{position:relative;width:100%;height:100%;overflow:hidden;border-radius:28px;background:#d8d8d8;box-shadow:0 14px 28px #1b1d3826}.activity-poster>img{position:absolute;inset:0;width:100%;height:100%;display:block;object-fit:cover}.activity-shade{position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,23,42,.12) 0%,rgba(15,23,42,.44) 42%,rgba(15,23,42,.94) 100%)}.activity-status{position:absolute;z-index:2;top:18px;right:18px;display:inline-flex;align-items:center;gap:8px;padding:9px 16px;border-radius:999px;color:#fff;font-size:13px;font-weight:700;box-shadow:0 4px 10px #1113}.activity-status:before{content:'';width:11px;height:11px;border-radius:50%;background:#fff}.activity-status.open{background:#4146a3}.activity-status.closed{background:#f12c32}.activity-status.draft{background:#5a666d}.activity-content{position:absolute;z-index:1;inset:0;padding:18px 22px 20px;display:flex;flex-direction:column;color:#fff}.activity-action{text-align:center;margin:0 0 13px}.activity-action .action-button{width:min(100%,242px);min-height:39px;border:0;border-radius:8px;background:#4146a3;color:white;font-size:13px;font-weight:700;cursor:pointer}.activity-action .action-button.danger{background:#f12c32}.activity-category{font-size:11px;line-height:1.4;margin:0 0 10px;color:#fff}.activity-title{font-size:19px;line-height:1.3;font-weight:700;margin:0 0 12px;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;color:#fff}.activity-meta{font-size:12px;line-height:1.45;margin:0 0 8px;color:#f4f5fa;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}.activity-description{font-size:12px;line-height:1.5;margin:2px 0 12px;color:#f4f5fa;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}.activity-footer{margin-top:auto;padding-top:12px;border-top:1px solid rgba(255,255,255,.35);display:flex;justify-content:space-between;align-items:flex-end;gap:12px}.activity-footer .fee span,.activity-footer .fee strong{color:#fff}.activity-footer .fee span{font-size:11px}.activity-footer .fee strong{font-size:17px}.activity-footer .edit-link{background:#f24e1e;color:#fff;padding:10px 15px;border-radius:8px;font-size:13px;font-weight:700;white-space:nowrap;border:0;}@media(max-width:800px){.activity-card{max-width:390px}}@media(max-width:500px){.activity-card{max-width:390px;width:100%}}
            .activity-shade{background:linear-gradient(180deg,rgba(15,23,42,0) 0%,rgba(15,23,42,.06) 34%,rgba(15,23,42,.78) 100%)}.activity-content{inset:auto 0 0;height:72%;padding:20px 22px;background:linear-gradient(180deg,rgba(15,23,42,0) 0%,rgba(15,23,42,.86) 18%,rgba(15,23,42,.97) 100%)}@media(max-width:500px){.activity-content{height:76%;padding:18px}}
            .edit-modal{display:none;position:fixed;inset:0;z-index:1000;place-items:center;padding:20px}.edit-modal.is-open{display:grid}.edit-modal-backdrop{position:absolute;inset:0;background:rgba(9,12,24,.72);backdrop-filter:blur(5px)}.edit-modal-dialog{position:relative;z-index:1;width:min(1450px,96vw);height:min(92vh,900px);display:grid;grid-template-columns:minmax(300px,.95fr) minmax(500px,1.05fr);overflow:hidden;border-radius:26px;background:#fff;box-shadow:0 28px 80px #0005}.edit-modal-poster{min-height:0;background:#1b2030;overflow:hidden}.edit-modal-poster img{width:100%;height:100%;object-fit:cover;display:block}.edit-modal-form-area{overflow-y:auto;padding:34px 32px 28px;color:#1b1d38}.edit-modal-form-area h2{font-size:28px;margin:0 0 6px}.edit-modal-intro{margin:0 0 22px;color:#666b80;font-size:14px}.edit-modal-close{position:absolute;right:14px;top:12px;z-index:2;width:40px;height:40px;border:0;border-radius:50%;background:#edf0f4;color:#1b1d38;font-size:26px;line-height:1;cursor:pointer}.edit-form-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px 18px}.edit-form-grid label{display:flex;flex-direction:column;gap:7px;color:#222743;font-size:11px;font-weight:700;text-transform:uppercase}.edit-form-grid input,.edit-form-grid textarea{width:100%;min-width:0;border:1px solid transparent;border-radius:11px;background:#eef0f4;padding:13px 15px;color:#1b1d38;font:500 14px 'DM Sans',sans-serif;text-transform:none;outline:none}.edit-form-grid input:focus,.edit-form-grid textarea:focus{border-color:#4349a7;box-shadow:0 0 0 3px #4349a71a}.edit-form-grid textarea{resize:vertical;min-height:100px}.edit-form-grid input[type=file]{padding:10px;border:1px dashed #c5cada;background:#fff}.edit-form-grid small{color:#6c7285;font-size:11px;font-weight:400;text-transform:none;line-height:1.4}.edit-full{grid-column:1/-1}.edit-payment{margin:22px 0 0;padding:14px 16px 16px;border:1px solid #dce0e8;border-radius:14px}.edit-payment legend{padding:0 8px;font-size:14px;font-weight:700}.edit-payment .edit-form-grid{grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}.current-qris{display:flex;align-items:center;gap:12px;margin-top:12px;color:#555d71;font-size:12px}.current-qris img{width:68px;height:68px;object-fit:contain;border:1px solid #e1e4ea;border-radius:8px}.edit-modal-actions{display:flex;align-items:center;gap:18px;margin-top:22px}.save-edit-button,.cancel-edit-button{border:0;border-radius:11px;padding:14px 22px;font:700 14px 'DM Sans',sans-serif;cursor:pointer}.save-edit-button{background:#1b1d38;color:#fff}.save-edit-button:disabled{opacity:.6;cursor:wait}.cancel-edit-button{background:transparent;color:#343cac;text-decoration:underline}.edit-errors{margin-bottom:16px;padding:12px 15px;border-radius:10px;background:#fee8e8;color:#9c2424;font-size:13px}.edit-errors ul{margin:6px 0 0;padding-left:20px}@media(max-width:900px){.edit-modal-dialog{grid-template-columns:minmax(220px,.7fr) minmax(420px,1.3fr)}.edit-modal-form-area{padding:28px 22px}.edit-payment .edit-form-grid{grid-template-columns:1fr 1fr}}@media(max-width:700px){.edit-modal{padding:10px}.edit-modal-dialog{width:100%;height:96vh;grid-template-columns:1fr;grid-template-rows:180px minmax(0,1fr);border-radius:18px}.edit-modal-poster img{object-position:center 35%}.edit-modal-form-area{padding:24px 18px}.edit-modal-form-area h2{font-size:23px}.edit-form-grid{grid-template-columns:1fr 1fr;gap:12px}.edit-payment .edit-form-grid{grid-template-columns:1fr}.edit-modal-actions{padding-bottom:8px}}
    body.modal-open{overflow:hidden}
    /* Hover Kelola Kegiatan: angkat card sedikit, poster tetap fokus, tombol punya feedback jelas. */
    .activity-card{transition:transform .24s ease,filter .24s ease}
    .activity-poster{transition:box-shadow .24s ease}
    .activity-poster>img{transition:transform .4s ease}
    .action-button,.activity-footer .edit-link,.add-button{transition:transform .18s ease,background-color .18s ease,box-shadow .18s ease}
    .action-button:hover,.activity-footer .edit-link:hover,.add-button:hover{transform:translateY(-2px);box-shadow:0 7px 16px rgba(20,21,38,.2)}
    .action-button:not(.danger):hover{background:#34398f}
    .action-button.danger:hover{background:#d9222a}
    .activity-footer .edit-link:hover{background:#ff5728;transform:translateY(-2px) scale(1.04)}
    .add-button:hover{background:#383a60}
    .action-button:active,.activity-footer .edit-link:active,.add-button:active{transform:translateY(0) scale(.98);box-shadow:none}
    .action-button:focus-visible,.activity-footer .edit-link:focus-visible,.add-button:focus-visible{outline:3px solid #8b90ff;outline-offset:3px}
    @media(hover:hover){.activity-card:hover{transform:translateY(-5px)}.activity-card:hover .activity-poster{box-shadow:0 24px 46px rgba(10,12,28,.48),0 10px 22px rgba(10,12,28,.3)}.activity-card:hover .activity-poster>img{transform:scale(1.05)}}
    @media(prefers-reduced-motion:reduce){.activity-card,.activity-poster,.activity-poster>img,.action-button,.activity-footer .edit-link,.add-button{transition:none}}
    /* Jaga tombol tutup tetap terpisah dari scrollbar dan judul modal. */
    .edit-modal-dialog{position:relative}
    .edit-modal-close{position:absolute;top:18px;right:24px;z-index:10;box-shadow:0 2px 8px rgba(27,29,56,.12)}
    .edit-modal-form-area{scrollbar-gutter:stable;padding-top:34px;padding-right:58px}
    @media(max-width:700px){.edit-modal-close{top:14px;right:14px}.edit-modal-form-area{padding-top:66px;padding-right:18px}}
    </style>
    <style>
        .nav a{transition:color .18s ease,background-color .18s ease,transform .18s ease}
        .nav a:not(.active):hover,.nav a:not(.active):focus-visible{color:#4146a3;background:#f0f1fa}
        .nav a:not(.active):active{transform:scale(.97)}
        .nav a:focus-visible{outline:2px solid #777ce0;outline-offset:3px}
        #theme-toggle{width:40px;height:40px;border:0;border-radius:50%;display:grid;place-items:center;background:#e7e7ea;color:#1b1d38;cursor:pointer;transition:background-color .2s ease,transform .2s ease}
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
        <div class="account"><span class="avatar" aria-hidden="true"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-4.1 0-7 2.1-7 4.5V21h14v-2.5c0-2.4-2.9-4.5-7-4.5Z"/></svg></span><span class="account-copy"><strong>{{ auth()->user()->nama_lengkap }}</strong><span>{{ $lembaga->nama_lembaga ?? 'Admin Lembaga' }}</span></span><button class="icon-button" id="theme-toggle" type="button" aria-label="Aktifkan mode gelap" title="Aktifkan mode gelap"><svg id="theme-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg></button><form class="logout-form" method="POST" action="{{ route('logout') }}">@csrf<button class="icon-button" type="submit" aria-label="Keluar" title="Keluar"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 17v-2h4v-6h-4V7l-5 5 5 5Zm9-14H5a2 2 0 0 0-2 2v4h2V5h14v14H5v-4H3v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Z"/></svg></button></form></div>
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
        <section class="content" aria-label="Daftar kegiatan">
            <div class="toolbar"><a class="add-button" href="{{ route('kegiatan.create') }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M7 12h10"/></svg>Tambah Kegiatan</a></div>
            @if (session('sukses'))<div class="alert success" role="status">{{ session('sukses') }}</div>@endif
            @if (session('error'))<div class="alert error" role="alert">{{ session('error') }}</div>@endif
            <div class="cards">
                @forelse ($daftarKegiatan as $kegiatan)
                    @php($pendaftaranTerbuka = $kegiatan->status_publikasi === 'Terbit' && $kegiatan->batas_pendaftaran && now()->lte(\Illuminate\Support\Carbon::parse($kegiatan->batas_pendaftaran)))
                    <article class="activity-card" aria-label="Kegiatan: {{ $kegiatan->judul }}">
                        <div class="activity-poster">
                            @if ($kegiatan->poster)
                                <img src="{{ asset('storage/' . $kegiatan->poster) }}" alt="Poster {{ $kegiatan->judul }}" loading="lazy">
                            @endif
                            <div class="activity-shade"></div>
                            <span class="activity-status {{ $kegiatan->status_publikasi === 'Draft' ? 'draft' : ($pendaftaranTerbuka ? 'open' : 'closed') }}">
                                {{ $kegiatan->status_publikasi === 'Draft' ? 'DRAFT' : ($pendaftaranTerbuka ? 'OPEN' : 'CLOSED') }}
                            </span>
                            <div class="activity-content">
                                @if ($kegiatan->status_publikasi === 'Terbit')
                                    <form class="activity-action" method="POST" action="{{ route('kegiatan.nonaktifkan', ['id' => $kegiatan->id_kegiatan]) }}">
                                        @csrf @method('PATCH')
                                        <button class="action-button danger" type="submit">Nonaktifkan Kegiatan</button>
                                    </form>
                                @elseif ($kegiatan->status_publikasi === 'Draft')
                                    <form class="activity-action" method="POST" action="{{ route('kegiatan.terbitkan', ['id' => $kegiatan->id_kegiatan]) }}">
                                        @csrf @method('PATCH')
                                        <button class="action-button" type="submit">Terbitkan Kegiatan</button>
                                    </form>
                                @endif
                                <p class="activity-category">◉ <strong>Kategori</strong> • {{ $kegiatan->kategori }}</p>
                                <h2 class="activity-title">{{ $kegiatan->judul }}</h2>
                                <p class="activity-meta">{{ \Illuminate\Support\Carbon::parse($kegiatan->tanggal_pelaksanaan)->translatedFormat('d F Y') }}</p>
                                <p class="activity-meta">{{ $kegiatan->lokasi }}</p>
                                <p class="activity-description">{{ \Illuminate\Support\Str::limit(strip_tags($kegiatan->deskripsi), 130) }}</p>
                                <div class="activity-footer">
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
                                    <button
                                        class="edit-link edit-modal-trigger"
                                        type="button"
                                        data-update-url="{{ route('kegiatan.update', ['id' => $kegiatan->id_kegiatan]) }}"
                                        data-payload="{{ base64_encode(json_encode([
                                            'judul' => $kegiatan->judul,
                                            'kategori' => $kegiatan->kategori,
                                            'deskripsi' => $kegiatan->deskripsi,
                                            'tanggal_pelaksanaan' => \Illuminate\Support\Carbon::parse($kegiatan->tanggal_pelaksanaan)->format('Y-m-d\TH:i'),
                                            'lokasi' => $kegiatan->lokasi,
                                            'batas_pendaftaran' => \Illuminate\Support\Carbon::parse($kegiatan->batas_pendaftaran)->format('Y-m-d\TH:i'),
                                            'tautan_pendaftaran' => $kegiatan->tautan_pendaftaran,
                                            'poster_url' => asset('storage/' . $kegiatan->poster),
                                            'qris_url' => $kegiatan->qris ? asset('storage/' . $kegiatan->qris) : null,
                                            'biaya_pendaftaran' => $kegiatan->biaya_pendaftaran,
                                            'nomor_rekening' => $kegiatan->nomor_rekening,
                                        ])) }}"
                                    >Edit →</button>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="empty"><h2>Belum ada kegiatan</h2><p>Tambahkan kegiatan pertama untuk lembagamu.</p><a href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a></div>
                @endforelse
            </div>
        </section>
    </main>
    <div class="edit-modal" id="edit-modal" aria-hidden="true">
        <div class="edit-modal-backdrop" data-close-edit></div>
        <section class="edit-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="edit-modal-title">
            <button class="edit-modal-close" type="button" aria-label="Tutup" data-close-edit>×</button>
            <div class="edit-modal-poster">
                <img id="edit-poster-preview" src="" alt="Poster kegiatan">
            </div>
            <div class="edit-modal-form-area">
                <h2 id="edit-modal-title">Edit Kegiatan</h2>
                <p class="edit-modal-intro">Perbarui informasi kegiatan lembagamu.</p>
                <div class="edit-errors" id="edit-errors" hidden></div>
                <form id="edit-activity-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="edit-form-grid">
                        <label>Judul Kegiatan<input name="judul" type="text" maxlength="255" required></label>
                        <label>Kategori<input name="kategori" type="text" maxlength="255" required></label>
                        <label class="edit-full">Deskripsi<textarea name="deskripsi" rows="4" required></textarea></label>
                        <label>Tanggal Pelaksanaan<input name="tanggal_pelaksanaan" type="datetime-local" required></label>
                        <label>Lokasi<input name="lokasi" type="text" maxlength="255" required></label>
                        <label>Batas Pendaftaran<input name="batas_pendaftaran" type="datetime-local" required></label>
                        <label class="edit-full">Tautan Pendaftaran<input name="tautan_pendaftaran" type="url" required></label>
                        <label class="edit-full">Ganti Poster<input name="poster" type="file" accept=".jpg,.jpeg,.png"><small>Kosongkan jika ingin memakai poster saat ini. Maksimal 2 MB.</small></label>
                    </div>
                    <fieldset class="edit-payment">
                        <legend>Informasi pembayaran (opsional)</legend>
                        <div class="edit-form-grid">
                            <label>Biaya Pendaftaran (Rp)<input name="biaya_pendaftaran" type="number" min="0" step="1" placeholder="Contoh: 25000"><small>Isi 0 jika gratis.</small></label>
                            <label>Nomor Rekening<input name="nomor_rekening" type="text" maxlength="100"></label>
                            <label>Gambar QRIS<input name="qris" type="file" accept=".jpg,.jpeg,.png"><small>Kosongkan untuk mempertahankan QRIS saat ini.</small></label>
                        </div>
                        <div class="current-qris" id="current-qris" hidden><span>QRIS saat ini</span><img id="edit-qris-preview" src="" alt="QRIS saat ini"></div>
                    </fieldset>
                    <div class="edit-modal-actions">
                        <button class="save-edit-button" type="submit">Simpan Perubahan</button>
                        <button class="cancel-edit-button" type="button" data-close-edit>Kembali</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script>
        (function () {
            const modal = document.getElementById('edit-modal');
            const form = document.getElementById('edit-activity-form');
            const errorsBox = document.getElementById('edit-errors');
            const posterPreview = document.getElementById('edit-poster-preview');
            const qrisPreview = document.getElementById('edit-qris-preview');
            const currentQris = document.getElementById('current-qris');
            const saveButton = form.querySelector('.save-edit-button');
            let lastTrigger = null;
            function closeModal() { modal.classList.remove('is-open'); modal.setAttribute('aria-hidden', 'true'); document.body.classList.remove('modal-open'); if (lastTrigger) lastTrigger.focus(); }
            document.querySelectorAll('.edit-modal-trigger').forEach(function (button) {
                button.addEventListener('click', function () {
                    const binary = atob(button.dataset.payload);
                    const bytes = Uint8Array.from(binary, character => character.charCodeAt(0));
                    const data = JSON.parse(new TextDecoder().decode(bytes));
                    lastTrigger = button; form.action = button.dataset.updateUrl; form.reset(); errorsBox.hidden = true; errorsBox.innerHTML = '';
                    Object.entries(data).forEach(function ([name, value]) { const field = form.elements.namedItem(name); if (field && !['poster_url', 'qris_url'].includes(name)) field.value = value ?? ''; });
                    posterPreview.src = data.poster_url || '';
                    if (data.qris_url) { qrisPreview.src = data.qris_url; currentQris.hidden = false; } else { currentQris.hidden = true; qrisPreview.removeAttribute('src'); }
                    modal.classList.add('is-open'); modal.setAttribute('aria-hidden', 'false'); document.body.classList.add('modal-open'); form.querySelector('[name="judul"]').focus();
                });
            });
            modal.querySelectorAll('[data-close-edit]').forEach(button => button.addEventListener('click', closeModal));
            document.addEventListener('keydown', event => { if (event.key === 'Escape' && modal.classList.contains('is-open')) closeModal(); });
            form.addEventListener('submit', async function (event) {
                event.preventDefault(); if (!form.reportValidity()) return; errorsBox.hidden = true; saveButton.disabled = true; saveButton.textContent = 'Menyimpan...';
                try {
                    const response = await fetch(form.action, {method: 'POST', body: new FormData(form), headers: {'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest'}});
                    if (response.redirected || response.ok) { window.location.reload(); return; }
                    const result = await response.json();
                    const messages = Object.values(result.errors || {}).flat().filter(Boolean);
                    if (messages.length === 0) messages.push(result.message || `Penyimpanan gagal (HTTP ${response.status}).`);
                    errorsBox.innerHTML = '<strong>Periksa kembali isian berikut:</strong><ul>' + messages.map(message => '<li>' + message + '</li>').join('') + '</ul>'; errorsBox.hidden = false;
                } catch (error) { errorsBox.textContent = 'Perubahan belum berhasil disimpan. Periksa koneksi lalu coba lagi.'; errorsBox.hidden = false; }
                finally { saveButton.disabled = false; saveButton.textContent = 'Simpan Perubahan'; }
            });
        })();
    </script>
    <script>
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