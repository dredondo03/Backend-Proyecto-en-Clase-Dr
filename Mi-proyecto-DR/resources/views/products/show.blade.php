<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $moto['nombre'] }} - Motos Store</title>
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

    <div class="container">
        <div class="product-detail">
            <div class="detail-image">
                <div style="height: 300px; background: #e94560; display: flex; align-items: center; justify-content: center; border-radius: 8px; color: white; font-size: 6rem;">
                    🏍️
                </div>
            </div>
            <div class="detail-info">
                <h1>{{ $moto['nombre'] }}</h1>
                <p class="price">{{ $moto['precio'] }}</p>
                <p>Descripción detallada de esta increíble moto. Ideal para los amantes de la velocidad y el estilo.</p>
                <button class="btn-primary">Comprar Ahora</button>
                <a href="/product" class="btn-secondary">Volver a Productos</a>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Motos Store - Todos los derechos reservados</p>
    </footer>
</body>
</html>