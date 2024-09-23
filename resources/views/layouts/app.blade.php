<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>
    @yield('content')

    <!-- Carga los scripts al final del body -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>

