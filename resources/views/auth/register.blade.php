<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <button class="active">Sign Up</button>
            <button onclick="location.href='{{ route('login') }}'">Log In</button>
        </div>
        <form action="{{ route('register') }}" method="POST" class="form-content">
            @csrf
            <h2>Sign Up for Free</h2>
            <div class="input-group">
                <input type="text" name="nombre" placeholder="First Name*" required>
                <input type="text" name="apellidos" placeholder="Last Name*" required>
            </div>
            <div class="input-group">
                <input type="date" name="fecha_nacimiento" required>
            </div>
            <div class="input-group">
                <input type="email" name="correo" placeholder="Email Address*" required>
                <input type="tel" name="telefono" placeholder="Phone*" required>
            </div>
            <div class="input-group">
                <input type="text" name="direccion_clinica" placeholder="Clinic Address">
            </div>
            <div class="input-group">
                <input type="text" name="especialidad" placeholder="Specialty">
            </div>
            <div class="input-group">
                <input type="text" name="n_usuario" placeholder="Username*" required>
                <input type="password" name="n_contrasena" placeholder="Set A Password*" required>
            </div>
            <div class="input-group">
                <select name="id_localidad" required>
                    @foreach($localidades as $localidad)
                        <option value="{{ $localidad }}">{{ $localidad }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="submit-button">Get Started</button>
        </form>
    </div>
</body>
</html>
