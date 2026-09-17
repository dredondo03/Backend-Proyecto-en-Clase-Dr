<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // Import para el factory

    protected $table = 'productos'; // Tabla que usa en migraciones
    protected $primaryKey = 'id';

    // 👇 IMPORTANTE: Campos que se pueden llenar masivamente
    // Sin esto, Product::create() y $product->update() fallarán
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
    ];

    // 👇 RELACIÓN CON CATEGORÍA (la que faltaba)
    /**
     * Un producto pertenece a una categoría.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}