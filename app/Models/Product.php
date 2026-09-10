<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; /*esto es un import para hacer el factory */
    protected $table = 'productos'; /*tener en cuneta que tabla es la que usa en migraciones*/
    protected $primaryKey = 'id';
}
/*php artisan db:seed
php artisan make:factory ProductFactory*/