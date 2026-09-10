<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category; // 1. IMPORTACIÓN AGREGADA
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true), // 'words' es mejor para nombres de producto que 'name' (que genera nombres de personas)
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 10, 1000),
            
            // 2. FORMA CORRECTA EN LARAVEL:
            // Si la categoría no existe, Laravel la creará automáticamente.
            // Si le pasas una categoría explícita desde el Seeder, respetará la que envíes.
            'category_id' => Category::factory(),
        ];
    }
}