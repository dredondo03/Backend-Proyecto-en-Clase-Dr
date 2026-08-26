<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $motos = [
            ['id' => 1, 'nombre' => 'Honda CBR 1000RR', 'precio' => '$25,000'],
            ['id' => 2, 'nombre' => 'Yamaha R6', 'precio' => '$18,500'],
            ['id' => 3, 'nombre' => 'Kawasaki Ninja ZX-10R', 'precio' => '$22,000'],
            ['id' => 4, 'nombre' => 'Ducati Panigale V4', 'precio' => '$35,000'],
        ];
        
        return view('products.index', compact('motos'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function show($idProduct)
    {
        $motos = [
            1 => ['id' => 1, 'nombre' => 'Honda CBR 1000RR', 'precio' => '$25,000'],
            2 => ['id' => 2, 'nombre' => 'Yamaha R6', 'precio' => '$18,500'],
            3 => ['id' => 3, 'nombre' => 'Kawasaki Ninja ZX-10R', 'precio' => '$22,000'],
            4 => ['id' => 4, 'nombre' => 'Ducati Panigale V4', 'precio' => '$35,000'],
        ];
        
        $moto = $motos[(int)$idProduct] ?? null;
        
        if (!$moto) {
            abort(404);
        }
        
        return view('products.show', compact('moto'));
    }
}