<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory; // Import para el factory

    protected $table = 'categories'; // Tabla que usa en migraciones
    protected $primaryKey = 'id';

    // 👇 IMPORTANTE: Campos que se pueden llenar masivamente
    // Sin esto, Category::create() y $category->update() fallarán
    protected $fillable = [
        'name',
    ];

    // 👇 RELACIÓN INVERSA CON PRODUCTOS
    /**
     * Una categoría tiene muchos productos.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
/*php  artisan make:model category (siempre en singular*/