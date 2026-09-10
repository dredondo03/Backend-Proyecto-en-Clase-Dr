<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
/*ESTA PARTE DEL USER SE DEJA EN EL PRIME SAVE, LUEGO SE COMENTA PARA PODER AGREGAR MAS  */
      /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
/*llama los modelos, verificar que haga la importacion */
        $category1 = new Category();
        $category1->name = 'Electronics';
        $category1->description = 'Electronic devices and accessories';

        /*esto guarda en la base de datos */
        /* php artisan db:seed   (guarda todo)*/
        $category1->save();

        Category::factory(1000)->create(); /*esto es para crear 1000 categorias de manera automatica */
    }
}
