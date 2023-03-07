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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->Nullable();
            $table->string('email')->Nullable();
            $table->string('phone')->Nullable();
            $table->string('address')->Nullable();
            $table->string('user_id')->Nullable();
            $table->string('product_title')->Nullable();
            $table->string('quantity')->Nullable();
            $table->string('price')->Nullable();
            $table->string('image')->Nullable();
            $table->string('product_status')->Nullable();
            $table->string('delivery_status')->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
