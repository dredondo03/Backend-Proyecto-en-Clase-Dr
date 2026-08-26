<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos Store - Productos</title>
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
        <h1>Nuestras Motos</h1>
        <div class="products-grid">
            @foreach($motos as $moto)
                <div class="product-card">
                    <div class="product-image">
                        <div style="height: 200px; background: #e94560; display: flex; align-items: center; justify-content: center; border-radius: 8px 8px 0 0; color: white; font-size: 4rem;">
                            🏍️
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>{{ $moto['nombre'] }}</h3>
                        <p class="price">{{ $moto['precio'] }}</p>
                        <a href="/product/{{ $moto['id'] }}" class="btn-secondary">Ver Detalles</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        <p>© 2024 Motos Store - Todos los derechos reservados</p>
    </footer>
</body>
</html>