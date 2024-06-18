<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
    body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #4CAF50;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card-header {
    text-align: center;
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

.logo {
    width: 100px; /* Sesuaikan ukuran logo jika perlu */
    height: auto;
    margin-bottom: 1rem;
}

.form-group {
    margin-bottom: 1rem;
    width: 100%; /* Pastikan input field memenuhi lebar container */
}

.form-check {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.form-check-input {
    margin-right: 0.5rem;
}

.form-check-label a {
    color: #007bff;
    text-decoration: none;
}

.form-check-label a:hover {
    text-decoration: underline;
}

.btn-primary {
    width: 100%;
    padding: 0.5rem;
    font-size: 1rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

</Style>
<body>
    <div class="container">
    <img src="{{ asset('img/Logo AL-HUDA.png') }}" alt="SMP YPI Al-Huda Tasikmalaya">
        <div class="card">
            <div class="card-header">Lupa Password</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('forgot-password.send') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="old-password">Password Lama</label>
                        <input type="password" class="form-control" id="old-password" name="old-password" required>
                    </div>
                    <div class="form-group">
                        <label for="new-password">Password Baru</label>
                        <input type="password" class="form-control" id="new-password" name="new-password" required>
                    </div>
                    <div class="form-group">
                        <label for="new-password-confirm">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control" id="new-password-confirm" name="new-password_confirmation" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">Saya setuju dengan <a href="#">syarat & ketentuan ini</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
