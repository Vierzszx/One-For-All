<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | satu titik</title>
</head>
<body>
    <h1>Masuk ke FILKOM satu titik</h1>

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        @error('identitas')
            <p role="alert">{{ $message }}</p>
        @enderror

        <p>
            <label for="identitas">NIM mahasiswa atau email admin</label><br>
            <input type="text" id="identitas" name="identitas"
                    value="{{ old('identitas') }}" autocomplete="username" required>
        </p>

        <p>
            <label for="password">Kata sandi</label><br>
            <input type="password" id="passsword" name="password"
                    autocomplete="current-password" required>
        </p>

        <button type="submit">Masuk</button>
    </form>
</body>
</html>