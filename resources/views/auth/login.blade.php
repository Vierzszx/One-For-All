@php
    $themes = config('login_ui.themes');
    $img = fn (string $file) => asset('assets/auth/' . $file);
@endphp

@extends('layouts.auth')

@section('title', 'Masuk')

@section('content')
{{--
    Setiap gambar yang berbeda antar mode dirender untuk "light" dan "dark",
    lalu CSS menyembunyikan salah satunya (class for-light / for-dark).
    Jadi saat tombol mode ditekan, pergantian langsung tanpa loading ulang.
--}}
<main class="login-shell" aria-label="Masuk ke SatuTitik"
      style="@foreach ($themes as $name => $a)--bg-{{ $name }}: url('{{ $img($a['background']) }}'); @endforeach">

    {{-- ========== PANEL KIRI (brand) ========== --}}
    <section class="brand-panel" aria-label="SatuTitik, Sistem Informasi Katalog Kegiatan FILKOM">
        @foreach ($themes as $name => $a)
            <div class="themed for-{{ $name }}" style="--union-mask: url('{{ $img($a['union_mask']) }}')" aria-hidden="true">
                <div class="brand-art">
                    <div class="brand-photo">
                        <img src="{{ $img($a['photo']) }}" alt="">
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Posisi lockup SAMA untuk terang & gelap --}}
        <div class="brand-lockup">
            <span class="brand-lockup__icon" aria-hidden="true">
                @foreach ($themes as $name => $a)
                    <span class="themed for-{{ $name }}">
                        <img class="brand-lockup__tile" src="{{ $img($a['tile']) }}" alt="">
                        <img class="brand-lockup__mark" src="{{ $img($a['mark']) }}" alt="">
                    </span>
                @endforeach
            </span>
            <div class="brand-copy">
                <p class="brand-copy__name">SatuTitik.</p>
                <p class="brand-copy__description">Sistem Informasi Katalog Kegiatan FILKOM</p>
            </div>
        </div>
    </section>

    {{-- ========== PANEL KANAN (form) ========== --}}
    <section class="login-panel" aria-label="Form masuk">
        <div class="decorations" aria-hidden="true">
            @foreach ($themes as $name => $a)
                <div class="themed for-{{ $name }}">
                    @foreach ($a['floats'] as $fname => $file)
                        <img class="float float--{{ $fname }}" src="{{ $img($file) }}" alt="">
                    @endforeach
                </div>
            @endforeach
            <div class="float-square float-square--big"><i></i></div>
            <div class="float-square float-square--bottom-left"><i></i></div>
            <div class="float-square float-square--bottom-right"><i></i></div>
        </div>

        <div class="form-content">
            <div class="form-head">
                <h1 class="welcome">
                    Welcome.
                    @foreach ($themes as $name => $a)
                        <img class="welcome__icon for-{{ $name }}" src="{{ $img($a['welcome_icon']) }}" alt="">
                    @endforeach
                </h1>

                <button class="theme-toggle" type="button" aria-label="Ganti ke mode gelap" aria-pressed="false">
                    <svg class="theme-toggle__sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="4.4" fill="currentColor" stroke="none"/>
                        <path d="M12 2.2v2.4M12 19.4v2.4M2.2 12h2.4M19.4 12h2.4M5.1 5.1l1.7 1.7M17.2 17.2l1.7 1.7M18.9 5.1l-1.7 1.7M6.8 17.2l-1.7 1.7"/>
                    </svg>
                    <svg class="theme-toggle__moon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>
                    </svg>
                </button>
            </div>

            <form class="login-form" method="POST" action="{{ url('/login') }}" novalidate>
                @csrf

                <label class="field-label" for="identitas">Email/NIM</label>
                <input class="field-input" id="identitas" name="identitas" type="text"
                       autocomplete="username" placeholder="nama@email.com"
                       value="{{ old('identitas') }}" required
                       @error('identitas') aria-invalid="true" @enderror>

                <label class="field-label field-label--password" for="password">Kata Sandi</label>
                <div class="password-field">
                    <input class="field-input" id="password" name="password" type="password"
                           autocomplete="current-password" placeholder="Masukkan kata sandi" required
                           @error('password') aria-invalid="true" @enderror>
                    <button class="password-toggle" type="button"
                            aria-label="Tampilkan kata sandi" aria-pressed="false">
                        @foreach ($themes as $name => $a)
                            <img class="for-{{ $name }}" src="{{ $img($a['toggle_icon']) }}" alt="">
                        @endforeach
                    </button>
                </div>

                <button class="submit-button" type="submit">Masuk</button>

                <p class="form-status {{ $errors->any() ? 'is-error' : '' }}" role="status" aria-live="polite">{{ $errors->first() }}</p>
            </form>
        </div>

        <p class="terms">Dengan melanjutkan, kamu menyetujui Ketentuan Layanan dan Kebijakan Privasi.</p>
    </section>
</main>
@endsection
