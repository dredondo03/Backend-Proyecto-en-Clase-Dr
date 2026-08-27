<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos Store - Productos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @include('layout.header')

    <div class="container">
        @yield('content')
    </div>

    @include('layout.footer')
</body> 

</html>
