<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cartitems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantity');
            /*En esta parte referencio lo que relaciono y luego a la tabla, la pata de gallina es de donde empieza, luego hago un php artisan migrate y lueg un php artisan migrate:refresh*/ 
            $table->foreignId('product_id')->references('id')->on('productos');
            $table->foreignId('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartitems');
    }
};
