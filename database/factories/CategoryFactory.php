<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory /*Aca se pone lo que se quiere extender */
{
    protected $model = Category::class;
    public function definition(): array
    {
        return [ /*en esta parte ponemos como quweremos llenar los datos */
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
        ];
    }
}
