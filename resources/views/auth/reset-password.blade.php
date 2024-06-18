<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Reset Password</div>
            <div class="card-body">
                <form method="POST" action="{{ route('reset-password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
