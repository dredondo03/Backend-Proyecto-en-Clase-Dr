<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory; /*esto es un import para hacer el factory */
    protected $table = 'categories';
    protected $primaryKey = 'id';
}
/*php  artisan make:model category (siempre en singular*/