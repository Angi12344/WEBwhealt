<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <button onclick="location.href='{{ route('register') }}'">Sign Up</button>
            <button class="active">Log In</button>
        </div>
        <form action="{{ route('login') }}" method="POST" class="form-content">
            @csrf
            <img src="{{ asset('images/jackWhealt.png') }}" alt="logo" width="210" height="150" style="display: block; margin: 0 auto;">
            <div class="input-group">
                <input type="text" name="n_usuario" placeholder="Username*" required>
                <input type="password" name="n_contrasena" placeholder="Password*" required>
            </div>
            <button type="submit" class="submit-button">Log In</button>
        </form>
    </div>
</body>
</html>
