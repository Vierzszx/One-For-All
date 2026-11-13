<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Satu Titik</title>
</head>
<body>
    @if (auth()->user()->peran === 'Mahasiswa')
    <h1>Dashboard Mahasiswa</h1>
    <p>Halo, {{ auth()->user()->nama_lengkap }}.</p>
    <p>NIM: {{ auth()->user()->nim }}</p>
    @elseif (auth()->user()->peran === 'Admin Lembaga')
    <h1>Dashboard Admin Lembaga</h1>
    <p>Halo, {{ auth()->user()->nama_lengkap }}.</p>
    @endif

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</body>
</html>