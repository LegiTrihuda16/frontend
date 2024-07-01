<!DOCTYPE html>
<html>
<head>
    <title>Daftar - SMP YPI AL-HUDA</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .form-container {
            background-color: #4CAF50;
            padding: 45px 50px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        .form-container img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: blue;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 25px;
        }
        .form-container button:hover {
            background-color: #55b5;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <img src="{{ asset('img/Logo AL-HUDA.png') }}" alt="SMP YPI AL-HUDA">
        <h2>Daftar</h2>
        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="nama_pengguna" placeholder="Nama Pengguna" value="{{ old('nama_pengguna') }}">
            @error('nama_pengguna')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <input type="text" name="no_hp" placeholder="no_hp" value="{{ old('no_hp') }}">
            @error('nip')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="Password">
            @error('password')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">

            <input type="text" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
            @error('alamat')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <button type="submit"><a href="register/confirmation">Daftar</a></button>
        </form>
    </div>
</body>
</html>
