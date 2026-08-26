<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos Store - Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="/" class="nav-logo">🏍️ Motos Store</a>
            <ul class="nav-menu">
                <li><a href="/">Inicio</a></li>
                <li><a href="/product">Productos</a></li>
                <li><a href="/product/create">Agregar Moto</a></li>
            </ul>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-content">
            <h1>Bienvenido a Motos Store</h1>
            <p>Encuentra las mejores motos del mercado</p>
            <a href="/product" class="btn-primary">Ver Productos</a>
        </div>
    </div>

    <footer>
        <p>© 2024 Motos Store - Todos los derechos reservados</p>
    </footer>
</body>
</html>