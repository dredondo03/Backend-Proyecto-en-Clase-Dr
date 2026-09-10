@extends('layout.app')
@section('content')
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
            <div class="Product">
                @foreach($listaProductos as $producto)
                    <div class="product-card">
                        <div class="product-image">
                            <div style="height: 200px; background: #e94560; display: flex; align-items: center; justify-content: center; border-radius: 8px 8px 0 0; color: white; font-size: 4rem;">
                                🏍️
                            </div>
                        </div>
                        <div class="product-info">
                            <h3>{{ $producto->name }}</h3>
                            <p class="price">{{ $producto->description }}</p>
                            <a href="/product/{{ $producto->id }}" class="btn-secondary">Ver Detalles</a>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>

  @endsection