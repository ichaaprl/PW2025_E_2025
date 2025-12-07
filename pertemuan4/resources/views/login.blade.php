<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        
        <button type="submit">Login</button>
    </form>
    
    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
</body>
</html>