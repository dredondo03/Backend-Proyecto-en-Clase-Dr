@extends('layouts.app')
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
        <h1>Agregar Nueva Moto</h1>
        <form class="product-form">
            <div class="form-group">
                <label for="nombre">Nombre de la Moto</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Honda CBR 1000RR" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" id="precio" name="precio" placeholder="Ej: $25,000" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Descripción de la moto..."></textarea>
            </div>
            <button type="submit" class="btn-primary">Agregar Moto</button>
        </form>
    </div>

@endsection