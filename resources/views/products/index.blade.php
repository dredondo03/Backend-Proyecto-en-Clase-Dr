@extends('layout.app') {{-- O 'layout.app' según el nombre exacto de tu carpeta --}}

@section('content')
    <div class="container">
        <h1>Nuestras Motos</h1>
        
        <div class="products-grid">
            @foreach($listaProductos as $producto)
                <div class="product-card">
                    <div class="product-image">
                        <div style="height: 200px; background: #e94560; display: flex; align-items: center; justify-content: center; border-radius: 8px 8px 0 0; color: white; font-size: 4rem;">
                            🏍️
                        </div>
                    </div>
                    <div class="product-info">
                        <h3>{{ $producto->name }}</h3>
                        <p class="description">{{ $producto->description }}</p>
                        <p class="price">${{ number_format($producto->price, 2) }}</p>
                        <a href="/product/{{ $producto->id }}" class="btn-secondary">Ver Detalles</a>
                    </div>
                </div>
            @endforeach
        </div> {{-- Cierre de .products-grid --}}
    </div> {{-- Cierre de .container --}}
@endsection