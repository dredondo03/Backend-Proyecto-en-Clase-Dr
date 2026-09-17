<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory(100)->create();
    }
}