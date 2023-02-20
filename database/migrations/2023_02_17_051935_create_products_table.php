<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->notNullable();
            $table->string('description')->notNullable();
            $table->string('price')->notNullable();
            $table->string('quantity')->notNullable();
            $table->string('discount_price')->Nullable();
            $table->string('Category')->notNullable();
            $table->string('image')->Nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
