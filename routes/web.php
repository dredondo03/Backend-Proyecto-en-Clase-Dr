<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Ruta raíz (Home)
|--------------------------------------------------------------------------
| Redirige al listado de productos en lugar de la página de bienvenida
*/
Route::get('/', function () {
    return redirect()->route('products.index');
});

/*
|--------------------------------------------------------------------------
| RUTAS DE PRODUCTOS - ACCESO PÚBLICO (Solo consulta)
|--------------------------------------------------------------------------
| Cualquier usuario (logueado o no) puede ver el listado y el detalle.
*/
Route::prefix('product')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('products.index');           // Listar
    Route::get('/{product}', 'show')->name('products.show');    // Ver detalle
});

/*
|--------------------------------------------------------------------------
| RUTAS DE PRODUCTOS - ACCESO RESTRINGIDO (Requiere iniciar sesión)
|--------------------------------------------------------------------------
| Solo usuarios autenticados pueden crear, editar o eliminar productos.
*/
Route::prefix('product')->controller(ProductController::class)->middleware('auth')->group(function () {
    Route::get('/create', 'create')->name('products.create');   // Formulario crear
    Route::post('/', 'store')->name('products.store');          // Guardar
    Route::get('/{product}/edit', 'edit')->name('products.edit'); // Formulario editar
    Route::put('/{product}', 'update')->name('products.update'); // Actualizar
    Route::delete('/{product}', 'destroy')->name('products.destroy'); // Eliminar
});

/*
|--------------------------------------------------------------------------
| Rutas de Breeze (Dashboard, Perfil)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de autenticación de Breeze (login, register, etc.)
require __DIR__.'/auth.php';