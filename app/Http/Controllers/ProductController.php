<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Listar todos los productos con paginación y carga ansiosa.
     */
    public function index()
    {
        // Carga ansiosa de la categoría para evitar el problema N+1
        // Paginación de 10 productos por página
        $listaProductos = Product::with('category')->latest()->paginate(10);
        
        return view('products.index', compact('listaProductos'));
    }

    /**
     * Mostrar el formulario de creación.
     */
    public function create()
    {
        // Necesitamos las categorías para el <select> del formulario
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Guardar un nuevo producto en la base de datos.
     */
    public function store(ProductRequest $request)
    {
        // Si tienes el ProductRequest, úsalo (valida automáticamente)
        Product::create($request->validated());
        
        return redirect()->route('products.index')
            ->with('success', 'Producto creado exitosamente.');
        
        /* 
        // ALTERNATIVA SIN ProductRequest (si aún no lo has creado):
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        Product::create($request->all());
        
        return redirect()->route('products.index')
            ->with('success', 'Producto creado exitosamente.');
        */
    }

    /**
     * Mostrar un producto específico.
     */
    public function show(Product $product)
    {
        // Route Model Binding: Laravel busca el producto por ID automáticamente.
        // Si no existe, devuelve 404 automáticamente (no necesitas el if).
        return view('products.show', compact('product'));
    }

    /**
     * Mostrar el formulario de edición.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Actualizar un producto existente.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        
        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Eliminar un producto.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect()->route('products.index')
            ->with('success', 'Producto eliminado correctamente.');
    }
}