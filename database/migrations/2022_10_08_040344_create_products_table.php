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
            $table->string('product_name');
            $table->string('product_code');
            $table->float('price')->nullable();
            $table->string('unit')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('discount')->nullable();
            $table->float('promotion_price')->nullable();
            $table->string('status')->nullable();
            $table->string('models')->nullable();
            $table->string('made_in')->nullable();
            $table->integer('category_id');
            $table->string('image')->nullable();
            $table->longText('content')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
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
