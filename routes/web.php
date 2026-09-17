<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Ruta principal
Route::get('/', HomeController::class);

// Grupo de rutas para productos
Route::prefix('product')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('products.index');
    Route::get('/create', 'create')->name('products.create');
    Route::get('/{idProduct}', 'show')->name('products.show');
});