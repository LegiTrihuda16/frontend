<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMP YPI Al-Huda Tasikmalaya</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #FFFFFF;
            margin: 0;
        }
        .login-container {
            background-color: #4CAF50;
            padding: 50px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container img {
            align-items: center;
            max-width: 100px;
            margin-bottom: 10px;
        }
        .login-container h2 {
            font-family: Arial, sans-serif;
            color: white;
            margin-bottom: 20px;
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #0066cc;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-container button:hover {
            background-color: #005bb5;
        }
        .login-container a {
            color: white;
            text-decoration: none;
            display: block;
            margin-top: 10px;
            text-align: left;
            cursor: pointer;
        }
        .login-container a:hover {
            color: blue;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('img/Logo AL-HUDA.png') }}" alt="SMP YPI Al-Huda Tasikmalaya">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Nama Pengguna" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="forgot-password">Lupa Password?</a>
            <button type="submit">Login</button>
            <a href="register">Belum punya akun? Daftar sekarang</a>
        </form>
    </div>
</body>
</html>
