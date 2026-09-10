<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listar todos los productos
    public function index()
    {
        // Obtenemos todos los productos de la base de datos
        $listaProductos = Product::all();
        
        // Retornamos la vista pasando la variable $listaProductos
        return view('products.index', compact('listaProductos'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('products.create');
    }

    // Guardar un nuevo producto (necesario si usas el formulario create)
    public function store(Request $request)
    {
        // Aquí validarías y guardarías los datos. 
        // Por ahora, un ejemplo básico:
        $producto = new Product();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente.');
    }

    // Mostrar un producto específico
    public function show($idProduct)
    {
        // Buscamos el producto por ID en la base de datos
        $producto = Product::find($idProduct);

        // Si no existe, lanzamos error 404
        if (!$producto) {
            abort(404);
        }

        // Retornamos la vista show con la variable $producto
        return view('products.show', compact('producto'));
    }
}