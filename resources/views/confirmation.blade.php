<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file -->
    <style>
        body {
            background-color: #228B22;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .login-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .login-link {
            display: block;
            margin-top: 10px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/Logo AL-HUDA.png') }}" alt="SMP YPI Al-Huda Tasikmalaya">
        <h2>Daftar</h2>
        <p>Terimakasih sudah mendaftar di Website Absesnsi SMP YPI AL-Huda Tasikmalaya</p>
        <a href="/login" class="login-button">Login</a>
        <a href="/login" class="login-link">Sudah punya akun? Login disini</a>
    </div>
</body>
</html>
